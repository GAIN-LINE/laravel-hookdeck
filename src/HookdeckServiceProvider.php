<?php

namespace GainLine\Hookdeck;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client as GuzzleClient;
use Hookdeck\Configuration;
use Hookdeck\Api\ConnectionsApi;
use Hookdeck\Api\EventsApi;

class HookdeckServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/hookdeck.php', 'hookdeck');

        $this->app->singleton(Configuration::class, function () {
            $config = new Configuration();
            $config->setHost(config('hookdeck.base_uri'));
            $config->setAccessToken(config('hookdeck.api_key'));
            return $config;
        });

        $this->app->singleton(ConnectionsApi::class, fn($app) =>
            new ConnectionsApi(new GuzzleClient(), $app->make(Configuration::class))
        );

        $this->app->singleton(EventsApi::class, fn($app) =>
            new EventsApi(new GuzzleClient(), $app->make(Configuration::class))
        );

        $this->app->singleton(HookdeckManager::class, fn($app) =>
            new HookdeckManager($app->make(Configuration::class))
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/hookdeck.php' => config_path('hookdeck.php'),
        ], 'config');
    }
}
