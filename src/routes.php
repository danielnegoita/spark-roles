<?php

Route::namespace('SparkRoles')->group(function () {
    Route::get('/', 'Danielnegoita\SparkRoles\Http\Controllers\SparkRolesController@index')->name('spark-roles.index');
});