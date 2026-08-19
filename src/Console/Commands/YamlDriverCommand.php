<?php

declare(strict_types=1);

namespace LaravelPaperYamlDriver\YamlDriver\Console\Commands;

use Illuminate\Console\Command;

class YamlDriverCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-paper-yaml-driver:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-paper-yaml-driver.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('YamlDriver placeholder command executed.');

        return self::SUCCESS;
    }
}
