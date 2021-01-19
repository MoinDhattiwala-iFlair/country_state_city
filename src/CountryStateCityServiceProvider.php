<?php
namespace MoinDhattiwala\CountryStateCity;

use Illuminate\Support\ServiceProvider;

class CountryStateCityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'country_state_city');
    }

    public function register()
    {
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/country_state_city'),
            __DIR__ . '/database/seeders/' => base_path('database/seeders/'),
        ]);
    }
}
