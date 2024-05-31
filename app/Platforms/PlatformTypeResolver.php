<?php

namespace App\Platforms;

use App\Enums\PlatformType;
use App\Helpers;
use League\Uri\Uri;

readonly class PlatformTypeResolver
{
    const array YOUTUBE_HOSTS = [
        'youtube.com',
        'm.youtube.com',
        'youtu.be',
        'youtube-nocookie.com',
    ];

    public function fromUrl(string $url): PlatformType {
        $host = Helpers::removeWwwFromHost(Uri::fromBaseUri($url)->getHost());

        return match (true) {
            (collect(self::YOUTUBE_HOSTS)->contains($host)) => PlatformType::YouTube,
            default => PlatformType::Web,
        };
    }
}