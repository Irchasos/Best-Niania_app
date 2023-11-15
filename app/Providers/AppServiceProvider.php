<?php

namespace App\Providers;
use App\Interfaces\GuardianRepositoryInterface;
use App\Repositories\GuardianRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            GuardianRepositoryInterface::class, function () {
            return new  GuardianRepository;
        }
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
