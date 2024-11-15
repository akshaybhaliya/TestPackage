<?php

namespace Garage\TestPackage\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Garage\TestPackage\TestPackageServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            TestPackageServiceProvider::class,
        ];
    }
}