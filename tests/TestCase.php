<?php

declare(strict_types=1);

namespace LaravelPaperYamlDriver\YamlDriver\Tests;

use LaravelPaperYamlDriver\YamlDriver\YamlDriverServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            YamlDriverServiceProvider::class,
        ];
    }
}
