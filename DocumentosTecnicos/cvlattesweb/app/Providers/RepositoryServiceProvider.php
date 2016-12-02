<?php

namespace cvlattesweb\Providers;

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
            'cvlattesweb\Repositories\UserRepository',
            'cvlattesweb\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'cvlattesweb\Repositories\DocumentRepository',
            'cvlattesweb\Repositories\DocumentRepositoryEloquent'
        );

        $this->app->bind(
            'cvlattesweb\Repositories\CollegeRepository',
            'cvlattesweb\Repositories\CollegeRepositoryEloquent'
        );
    }
}
