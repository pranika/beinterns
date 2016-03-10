<?php

Route::resource('employee', 'EmployeeController');
Route::resource('jobseeker', 'JobSeekerController');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@getLogout');



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
