<?php

namespace Cityisempty\FilamentSurvey\Commands;

use Illuminate\Console\Command;

class FilamentSurveyCommand extends Command
{
    public $signature = 'filament-survey';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
