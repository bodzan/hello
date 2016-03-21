<?php

namespace Bradovanovic\Hello\Providers;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->publishes([__DIR__ . '/views' => base_path('resources/views/bradovanovic/hello')]);
        //W$this->loadViewsFrom(__DIR__ . '/views', 'hello');
        /*
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/bradovanovic/hello'),
        ]);
         */
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //include __DIR__ . '/routes.php';
        
        //$this->app->make('Bradovanovic\Hello\HelloController');
    }
}
