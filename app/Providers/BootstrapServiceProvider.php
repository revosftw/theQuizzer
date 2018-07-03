<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // https://stackoverflow.com/questions/29443735/laravel-5-publishing-assets
        $this->publishes([base_path('vendor/twbs/bootstrap/dist') => public_path('vendor/bootstrap')],'public');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
