<?php

namespace Dlagos\Providers;

use Dlagos\Repos\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class DlagoServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;
        $app->bind('Dlagos\Contracts\UserInterface', function($app){
            return new EloquentUserRepository();
        });
    }
}