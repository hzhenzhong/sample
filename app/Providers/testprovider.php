<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class testprovider extends ServiceProvider
{
	public $abc = 'ttt' ;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      //  view()->composer('module._head', function ($view) {
      //     $view->with('abc','112233');
      //  });
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->singleton('App\Providers\testprovider', function ($app) {
            return new testprovider('1') ;
        });
    }
}
