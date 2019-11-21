<?php

namespace Packages\Helpers\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Helpers\Helpers;

class HelpersServiceProvider extends ServiceProvider
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
        $this->app->singleton('Helpers', function ($app) {
            return new Helpers();
        });
    }
}
