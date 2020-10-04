<?php

namespace Dthornes\LaravelAdminCrudGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dthornes\LaravelAdminCrudGenerator\Skeleton\SkeletonClass
 */
class LaravelAdminCrudGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-admin-crud-generator';
    }
}
