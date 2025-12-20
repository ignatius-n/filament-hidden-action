<?php

namespace JeffersonGoncalves\Filament\HiddenAction;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HiddenActionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-hidden-action')
            ->hasViews();
    }
}
