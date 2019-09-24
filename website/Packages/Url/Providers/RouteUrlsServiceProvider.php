<?php

namespace Packages\Url\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Url\RouteUrls;

class RouteUrlsServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('RouteUrls', function ($app) {
            return new RouteUrls();
        });
    }
}
