<?php

namespace LaravelCrudGenerator\LaravelCrudGenerator\Tests;

use Orchestra\Testbench\TestCase;
use LaravelCrudGenerator\LaravelCrudGenerator\LaravelCrudGeneratorServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelCrudGeneratorServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
