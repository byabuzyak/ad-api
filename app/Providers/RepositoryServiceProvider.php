<?php

namespace App\Providers;

use App\Repositories\AdRepositoryInterface;
use App\Repositories\Eloquent\AdRepository;
use App\Repositories\Eloquent\Repository;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, Repository::class);
        $this->app->bind(AdRepositoryInterface::class, AdRepository::class);
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
