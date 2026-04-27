<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Interface\HeadOfFamilyRepositoryInterface;
use App\Repositories\HeadOfFamilyRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(HeadOfFamilyRepositoryInterface::class, HeadOfFamilyRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
