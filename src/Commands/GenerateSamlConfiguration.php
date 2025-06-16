<?php

namespace ModusDigital\LaravelSamlAuth\Commands;

use Illuminate\Console\Command;

class GenerateSamlConfiguration extends Command
{
    public $signature = 'make:saml';

    public $description = 'Generates a SAML configuration file and make controllers available';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
