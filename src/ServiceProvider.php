<?php
namespace Danielnegoita\SparkRoles;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
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