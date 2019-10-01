<?php

namespace Packages\Upload\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class UploadServiceProvider extends ServiceProvider
{
    protected $namespace = 'Packages\Upload\Http\Controllers';

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
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }


    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerController();
    }

    /**
     * register our config
     */
    protected function registerConfig()
    {
        if(!file_exists(base_path('config/upload.php')))
            $this->mergeConfigFrom(__DIR__.'/../Config/upload.php' ,'upload');
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../Routes/web.php');
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../Routes/api.php');
    }

    /**
     * register our controller
     */
    protected function registerController()
    {
        $this->app->make('Packages\Upload\Http\Controllers\AvatarController');
    }
}
