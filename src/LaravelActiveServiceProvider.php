<?php

namespace Lucadello91\Active;

use Illuminate\Support\ServiceProvider;

class LaravelActiveServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravelActive', function()
        {
            return new LaravelActive();
        });    }
}
