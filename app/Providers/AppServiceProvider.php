<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\DeviceToken;
use App\Observers\DeviceTokenObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DeviceToken::observe(DeviceTokenObserver::class);
    }
}
