<?php

namespace App\Platforms;

use App\Enums\PlatformType;
use App\Platforms\Contracts\Platform;
use App\Platforms\Contracts\PlatformFactory as PlatformFactoryContract;

readonly class PlatformFactory implements PlatformFactoryContract
{
    public function __construct(
        private YouTube $youTube,
        private Web $web,
    ) {}

    public function make(PlatformType $platformType): Platform {
        return match ($platformType) {
            PlatformType::YouTube => $this->youTube,
            PlatformType::Web => $this->web,
        };
    }
}
