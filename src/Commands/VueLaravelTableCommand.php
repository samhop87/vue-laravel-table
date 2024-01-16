<?php

namespace samhop87\VueLaravelTable\Commands;

use Illuminate\Console\Command;

class VueLaravelTableCommand extends Command
{
    public $signature = 'vue-laravel-table';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
