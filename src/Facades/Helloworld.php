<?php

namespace Garage\TestPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Helloworld extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'helloworld';
    }
}