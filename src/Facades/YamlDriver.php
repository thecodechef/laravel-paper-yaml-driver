<?php

declare(strict_types=1);

namespace LaravelPaperYamlDriver\YamlDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelPaperYamlDriver\YamlDriver\YamlDriver
 */
class YamlDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelPaperYamlDriver\YamlDriver\YamlDriver::class;
    }
}
