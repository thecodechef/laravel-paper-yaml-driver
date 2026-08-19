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
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-paper-yaml-driver.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-paper-yaml-driver');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-paper-yaml-driver');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-paper-yaml-driver.php' => config_path('laravel-paper-yaml-driver.php'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-paper-yaml-driver'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-paper-yaml-driver'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-paper-yaml-driver'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-paper-yaml-driver', 'laravel-paper-yaml-driver-migrations']);

        $this->commands([
            YamlDriverCommand::class,
        ]);
    }
}
