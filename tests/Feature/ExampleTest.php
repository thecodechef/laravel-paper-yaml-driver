<?php

declare(strict_types=1);

use LaravelPaperYamlDriver\YamlDriver\YamlDriver;

it('resolves the singleton', function (): void {
    expect(app(YamlDriver::class))->toBeInstanceOf(YamlDriver::class);
});

it('returns the same instance from the container', function (): void {
    expect(app(YamlDriver::class))->toBe(app(YamlDriver::class));
});

it('merges the package config', function (): void {
    expect(config('laravel-paper-yaml-driver.placeholder'))->toBe('default');
});

it('loads the package translations', function (): void {
    expect(trans('laravel-paper-yaml-driver::messages.placeholder'))->toBe('YamlDriver placeholder translation.');
});

it('registers the artisan command', function (): void {
    $this->artisan('laravel-paper-yaml-driver:placeholder')
        ->expectsOutputToContain('YamlDriver placeholder command executed.')
        ->assertSuccessful();
});
