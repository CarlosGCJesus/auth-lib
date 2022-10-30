<?php

namespace GcLib\AuthLib;

use Illuminate\Support\ServiceProvider;

class AuthLibServiceProvider extends ServiceProvider
{
    /**
     *  - fired after aplication including 3rd parties
     *  - bootstrap web services
     *  - listen for events
     *  - publish configurtion files or database migrations
     */
    public function boot()
    {
        //can do it, but wont!
            //$this->loadRoutesFrom(__DIR__ . '/routes/ms-auth.php');

        /**
         * Always in mind! Add configs, not hardcoded anywhere
         *
         * $this->publishes([__DIR__ . '/config/authlib.php' => config_path('authlib.php'); ]);
         */


    }

    /**
     *  - extend funcionality to corrent provider class
     *  - register service providers
     *  - create singleton classes
     */
    public function register()
    {
        # code...
        $this->app->singleton(AuthLib::class, function(){
            return new AuthLib();
        });
    }

}
