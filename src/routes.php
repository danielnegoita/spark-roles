<?php

Route::group([ 'middleware'=> 'web'], function () {
    Route::get('/spark-roles', 'Danielnegoita\SparkRoles\Controllers\SparkRolesController@index')->name('spark-roles.index');
});