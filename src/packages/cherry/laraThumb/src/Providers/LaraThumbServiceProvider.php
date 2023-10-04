<?php

namespace Cherry\LaraThumb\Providers;

use Cherry\LaraThumb\Services\LaraThumbService;
use Illuminate\Support\ServiceProvider;

class LaraThumbServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LaraThumbService::class, LaraThumbService::class);
    }
    public function boot(): void
    {

    }
}
