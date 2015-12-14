<?php

namespace moortwig\csvimporter;

use Illuminate\Support\ServiceProvider;

class csvimporterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        // $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'cvsimporter');

        // use this if your package has routes
        // $this->setupRoutes($this->app->router);
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'moortwig\cvsimporter\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerImporter();

        // use this if your package has a config file
        // config([
        //         'config/cvsimporter.php',
        // ]);
    }

    private function registerImporter()
    {
        $this->app->bind('cvsimporter',function($app){
            return new cvsimporter($app);
        });
    }
}