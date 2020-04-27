<?php

namespace App\Providers;


use App\tbl_insert;
use App\Observers\InsertObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        \App\tbl_insert::creating(function($model){
            if($model-> $id % 2 == 0){
                $model -> $name  = $model -> $name + "par";
            }
        });

        

        //tbl_insert :: observe (InsertObserver :: class);
    }
}
