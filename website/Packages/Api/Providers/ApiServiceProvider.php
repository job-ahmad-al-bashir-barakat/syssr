<?php

namespace Packages\Api\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Api\Api;

class ApiServiceProvider extends ServiceProvider
{
    public function __construct($app)
    {
        parent::__construct($app);

        $this->registerConfig();
    }


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
        $this->app->singleton('Api', function ($app) {
            return new Api();
        });
    }

    /**
     * register our config
     */
    protected function registerConfig()
    {
        if(!file_exists(base_path('config/api.php')))
            $this->mergeConfigFrom(__DIR__.'/../Config/api.php' ,'api');
    }
}
