<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InsertServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\tbl_insert::observe(\App\Observers\InsertObserver::class);
    }
}
