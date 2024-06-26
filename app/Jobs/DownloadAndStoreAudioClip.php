<?php

namespace App\Jobs;

use App\Apis\Ffmpeg\Contracts\Client as Ffmpeg;
use App\Apis\YtDlp\Client;
use App\Events\FinishedProcessingClip;
use App\Models\AudioClip;
use App\Platforms\Contracts\PlatformFactory;
use App\Platforms\Exceptions\DownloadException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DownloadAndStoreAudioClip implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $timeout;

    public function __construct(private readonly AudioClip $clip)
    {
        // Allow this job to run twice as long as the download process runs, because we also have to store the downloaded
        // file and update the database.
        $this->timeout = Client::DOWNLOAD_TIMEOUT * 2;
    }

    /**
     * @throws DownloadException
     */
    public function handle(
        PlatformFactory $platformFactory,
        Filesystem $storage,
        Ffmpeg $ffmpeg,
        Dispatcher $events,
    ): void {
        try {
            // Load related feeds (we'll need these later to dispatch events).
            $this->clip->load(AudioClip::REL_FEEDS, AudioClip::REL_AUDIO_SOURCE);

            $platform = $platformFactory->make($this->clip->platform_type);

            // Download the audio from the platform into a temporary file and open the downloaded file.
            $downloadPath = $platform->downloadAudio($this->clip->platform_url);
            $downloadHandle = fopen($downloadPath, 'r');

            // Use ffmpeg to get the duration.
            $duration = $ffmpeg->getDuration($downloadPath);

            if (! $downloadHandle) {
                throw new \Exception("Couldn't open $downloadPath as resource");
            }

            // Store the file.
            $storageResult = $storage->put($this->clip->storage_path, $downloadHandle);

            if (! $storageResult) {
                throw new \Exception("Couldn't store audio from $downloadPath");
            }

            // Mark the clip as no longer processing and save the file size and duration in the database (for use in the
            // RSS feed).
            $this->clip->processing = false;
            $this->clip->duration = $duration;
            $this->clip->size = $storage->size($this->clip->storage_path);
            $this->clip->save();
        } catch (\Exception $e) {
            // If there was an error, delete the clip so we don't leave it around in an intermediate state.
            // Todo: provide an option to retry a failed download?
            $this->clip->delete();

            throw $e;
        } finally {
            // Whether the operation succeeded or failed, delete the temporary file.
            if (isset($downloadPath) && file_exists($downloadPath)) {
                unlink($downloadPath);
            }

            // Dispatch an event to each feed indicating the clip is finished processing.
            foreach ($this->clip->feeds as $feed) {
                $events->dispatch(new FinishedProcessingClip($feed));
            }
        }
    }
}
