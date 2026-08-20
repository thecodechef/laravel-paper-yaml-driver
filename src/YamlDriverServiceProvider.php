<?php

declare(strict_types=1);

namespace LaravelPaperYamlDriver\YamlDriver;

use Illuminate\Support\ServiceProvider;
use LaravelPaperYamlDriver\YamlDriver\Console\Commands\YamlDriverCommand;

class YamlDriverServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-paper-yaml-driver.php', 'laravel-paper-yaml-driver');
        $this->app->singleton(YamlDriver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }
        $this->publishes([
            __DIR__.'/../config/laravel-paper-yaml-driver.php' => config_path('laravel-paper-yaml-driver.php'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-config']);
        $this->commands([
            YamlDriverCommand::class,
        ]);
    }
}
