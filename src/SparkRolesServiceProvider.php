<?php
namespace Danielnegoita\SparkRoles;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SparkRolesServiceProvider extends ServiceProvider
{
	/**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {               
    	$this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('spark-roles', function() {
             return new SparkRoles;
        });
    }
}