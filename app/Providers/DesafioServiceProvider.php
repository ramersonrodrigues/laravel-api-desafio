<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DesafioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\PostRepositoryInterface',
            'App\Repositories\RepositoryDesafio\PostRepository'
        );
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
