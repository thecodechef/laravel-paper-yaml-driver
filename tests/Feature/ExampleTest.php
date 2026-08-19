<?php

declare(strict_types=1);

use LaravelPaperYamlDriver\YamlDriver\YamlDriver;

it('resolves the singleton', function () {
    expect(app(YamlDriver::class))->toBeInstanceOf(YamlDriver::class);
});

it('returns the same instance from the container', function () {
    expect(app(YamlDriver::class))->toBe(app(YamlDriver::class));
});

it('merges the package config', function () {
    expect(config('laravel-paper-yaml-driver.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('laravel-paper-yaml-driver::messages.placeholder'))->toBe('YamlDriver placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-paper-yaml-driver::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-paper-yaml-driver:placeholder')
        ->expectsOutputToContain('YamlDriver placeholder command executed.')
        ->assertSuccessful();
});
