<?php

namespace Appino\LunaAi;

use Appino\LunaAi\Classes\LunaAi;
use Illuminate\Support\ServiceProvider;

class LunaAIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('lunaai.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'lunaai');

        // Register the main class to use with the facade
        $this->app->singleton('lunaai', function () {
            $config = app('config')->get('lunaai');
            return new LunaAi($config);
        });
    }
}
