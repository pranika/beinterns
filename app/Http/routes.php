<?php


Route::resource('employee', 'EmployeeController');
Route::resource('jobseeker', 'JobSeekerController');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('password/reset', array(
  'uses' => 'PasswordController@postEmail',
  'as' => 'password.request'
));
/*
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});



Route::get('index', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('homepage', 'PagesController@homepage');

Route::get('aboutus', 'PagesController@aboutus');
Route::get('contactus', 'PagesController@contactus');

Route::get('blog', 'PagesController@blog');
Route::get('terms', 'PagesController@terms');
Route::get('privacy', 'PagesController@privacy');

Route::get('employerdetails', 'PagesController@employerdetails');
Route::get('studentdetails', 'PagesController@studentdetails');
Route::get('studentdetails_vertical', 'PagesController@studentdetails_vertical');

Route::get('studentinfo', 'PagesController@studentinfo');
Route::get('employerinfo','PagesController@employerinfo');

Route::get('student_account', 'PagesController@student_account');
Route::get('employer_account','PagesController@employer_account');

Route::get('postjob','PagesController@postjob');

Route::get('formVerify', function () {
    return 'welcome! Recieved your form values!';
});

Route::post('formVerify', function () {
    return 'welcome! Recieved your form values! Post method used this time';
});

route::post('company_details','EmployeeController@company_details');
Route::get('hello', function () {
    return 'welcome to first route';
});

Route::get('fruits/{name?}', function ($name) {
    return   $name. 'is the selected fruit route';
});

Route::get('fruits/{name}', function ($name=apple) {

	if($name==apple)
		{  return 'Default value is taken' ; }
    return   $name. 'is the selected fruit route';
});

Route::get('/', function () {
    return view('index');
});