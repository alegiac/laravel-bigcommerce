<?php

namespace Alegiac\LaravelBigcommerce;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alegiac\LaravelBigcommerce\Skeleton\SkeletonClass
 */
class LaravelBigcommerceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-bigcommerce';
    }
}
