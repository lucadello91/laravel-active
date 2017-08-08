<?php namespace Lucadello91\Active\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelActive extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'laravelActive';
    }

}