<?php

namespace AnvarUlugov\Validate\Commands;

use Illuminate\Console\Command;

class ValidateCommand extends Command
{
    public $signature = 'laravel-validation-attributes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
