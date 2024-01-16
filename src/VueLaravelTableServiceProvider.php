<?php

namespace samhop87\VueLaravelTable;

use samhop87\VueLaravelTable\Commands\VueLaravelTableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VueLaravelTableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('vue-laravel-table')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_vue-laravel-table_table')
            ->hasCommand(VueLaravelTableCommand::class);
    }
}
