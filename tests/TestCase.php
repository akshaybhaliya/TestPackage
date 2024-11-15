<?php

namespace Test\TestPackage\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Test\TestPackage\TestPackageServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            TestPackageServiceProvider::class,
        ];
    }
}