<?php

namespace LPP\Main;

use Illuminate\Support\ServiceProvider;

class HelloProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('LPP\Main\HelloController');
        $this->loadViewsFrom(__DIR__.'./view','hello');
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include(__DIR__.'/route.php');
    }
}
?>