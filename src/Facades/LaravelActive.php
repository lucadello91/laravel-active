<?php namespace Lucadello91\LaravelActive\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelActive extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'laravelActive';
    }

}