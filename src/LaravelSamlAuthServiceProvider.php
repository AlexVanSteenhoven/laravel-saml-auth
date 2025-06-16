<?php

namespace ModusDigital\LaravelSamlAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ModusDigital\LaravelSamlAuth\Commands\GenerateSamlConfiguration;

class LaravelSamlAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-saml-auth')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(GenerateSamlConfiguration::class);
    }
}
