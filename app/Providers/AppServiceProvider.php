<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RepositoryInterface\PublisherRepositoryInterface;
use App\Repositories\RepositoryInterface\BaseRepositoryInterface;
use App\Repositories\AuthorRepository;
use App\Repositories\PublisherRepository;
use Illuminate\Pagination\Paginator;
use App\Repositories\UserRepository;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('vendor/pagination/bootstrap-4');
        Paginator::defaultSimpleView('vendor/pagination/simple-bootstrap-4');
    }

    /**
     * Register any application services.
     *
     * @return voi
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, AuthorRepository::class);
        $this->app->bind(PublisherRepositoryInterface::class, PublisherRepository::class);

        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }
}
