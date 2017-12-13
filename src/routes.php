<?php

Route::group(function () {
    Route::get('/spark-roles', 'Danielnegoita\SparkRoles\Http\Controllers\SparkRolesController@index')->name('spark-roles.index');
});