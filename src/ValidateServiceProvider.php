<?php

namespace AnvarUlugov\Validate;

use AnvarUlugov\Validate\Commands\ValidateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ValidateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-validation-attributes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_validation_attributes_table')
            ->hasCommand(ValidateCommand::class);
    }
}
