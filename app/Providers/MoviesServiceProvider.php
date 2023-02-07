<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MoviesService;

class MoviesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MoviesService::class, function ($app) {
            return new MoviesService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
