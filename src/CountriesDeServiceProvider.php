<?php

namespace Squire;

use Illuminate\Support\ServiceProvider;
use Squire\Models\Country;

class CountriesDeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Repository::registerSource(Country::class, 'de', __DIR__.'/../resources/data.csv');
    }
}