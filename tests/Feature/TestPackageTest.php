<?php

namespace Test\TestPackage\Tests\Feature;
use Test\TestPackage\Tests\TestCase;

class TestPackageTest extends TestCase
{
    public function test_package_route_works()
    {
        $response = $this->get('/test-package');
        $response->assertStatus(200);
    }
}