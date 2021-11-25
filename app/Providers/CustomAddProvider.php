<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomAddProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        app()->bind('add', function(){
            return new \App\Repositories\add;
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
