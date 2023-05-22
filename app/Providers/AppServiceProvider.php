<?php

namespace App\Providers;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\UserEloquentRepository;
use App\Services\GeoLocationService;
use GeoIp2\Database\Reader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserEloquentRepository::class);

        $this->app->singleton(GeoLocationService::class, function ($app) {
            $cityDatabaseFile = storage_path('app/GeoLite2-City.mmdb');
            $reader = new Reader($cityDatabaseFile);
            return new GeoLocationService($reader);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
