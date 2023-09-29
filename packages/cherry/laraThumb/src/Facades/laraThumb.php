<?php

namespace Cherry\LaraThumb\Facades;

use Cherry\LaraThumb\Services\LaraThumbService;
use Illuminate\Support\Facades\Facade;

class laraThumb extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LaraThumbService::class;
    }
}
