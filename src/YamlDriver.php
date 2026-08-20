<?php

declare(strict_types=1);

namespace LaravelPaperYamlDriver\YamlDriver;

use JacobJoerjensen\LaravelPaper\Contracts\DriverContract;
use JacobJoerjensen\LaravelPaper\Exceptions\FileParseException;
use Symfony\Component\Yaml;

final readonly class YamlDriver implements DriverContract
{
    public function extensions(): array
    {
        return ['yaml', 'yml'];
    }

    public function parse(string $filepath): array
    {
        $content = @file_get_contents($filepath);

        if ($content === false) {
            throw FileParseException::unreadable($filepath);
        }

        $data = Yaml::parseFile($content);

        return is_array($data) ? $data : [];

    }

    public function serialize(array $data): string
    {
        unset($data['slug']);

        return Yaml::dump($data);
    }
}
