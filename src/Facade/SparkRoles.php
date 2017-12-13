<?php
namespace Danielnegoita\SparkRoles\Facades;

use Illuminate\Support\Facades\Facade;

class SparkRoles extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SparkRoles';
    }
}