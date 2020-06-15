<?php

namespace AppsWithLove\Statamic\ExtendedSection;

use AppsWithLove\Statamic\ExtendedSection\Fieldtypes\ExtendedSectionFieldtype;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__ . '/../resources/js/fieldtype.js'
    ];

    protected $stylesheets = [
        __DIR__ . '/../resources/css/cp.css'
    ];

    protected $fieldtypes = [
        ExtendedSectionFieldtype::class
    ];
}
