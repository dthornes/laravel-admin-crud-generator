<?php

namespace LaravelCrudGenerator\LaravelCrudGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelCrudGenerator\LaravelCrudGenerator\Skeleton\SkeletonClass
 */
class LaravelCrudGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-crud-generator';
    }
}
