<?php

namespace Dthornes\LaravelAdminCrudGenerator\Tests;

use Orchestra\Testbench\TestCase;
use Dthornes\LaravelAdminCrudGenerator\LaravelAdminCrudGeneratorServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelAdminCrudGeneratorServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
