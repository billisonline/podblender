<?php

namespace App\Http\Controllers;

use App\Http\Views;
use App\Models\AudioClip;
use App\Models\Feed;
use App\Auth\Access\Gate;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;

readonly class ShowFeed
{
    public function __construct(
        private Gate $gate,
        private Views $views,
    ) {}

    /**
     * @throws AuthorizationException
     */
    public function __invoke(Request $request, Feed $feed): View {
        $this->gate->authorizeView($feed);

        $feed->load([Feed::REL_AUDIO_CLIPS =>  function (Relation $query) {
            $query->orderByDesc(AudioClip::COL_CREATED_AT); // todo: this should be pivot created at
            $query->with(AudioClip::REL_AUDIO_SOURCE);
        }]);

        return $this->views->feed($feed);
    }
}
