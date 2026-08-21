<?php

declare(strict_types=1);

namespace LaravelPaper\YamlDriver;

use JacobJoergensen\LaravelPaper\Contracts\DriverContract;
use JacobJoergensen\LaravelPaper\Exceptions\FileParseException;
use Symfony\Component\Yaml\Yaml;

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
        $data = Yaml::parse($content);

        return is_array($data) ? $data : [];
    }

    public function serialize(array $data): string
    {
        unset($data['slug']);

        return Yaml::dump($data, 2, 2);
    }
}
