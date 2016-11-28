<?php

namespace cvlattes\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
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
        $this->app->bind(
            'cvlattes\Repositories\CollegeRepository',
            'cvlattes\Repositories\CollegeRepositoryEloquent'
        );
    }
}
