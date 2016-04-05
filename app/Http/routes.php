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
    Route::get('index', 'PagesController@index');
    Route::get('about', 'PagesController@about');
    Route::get('homepage', 'PagesController@homepage');

    Route::get('aboutus', 'PagesController@aboutus');
    Route::get('contactus', 'PagesController@contactus');

    Route::get('blog', 'PagesController@blog');
    Route::get('terms', 'PagesController@terms');
    Route::get('privacy', 'PagesController@privacy');

    Route::get('employerdetails', 'PagesController@employerdetails');
    Route::get('confirm/{confirmation_code}','EmployeeController@confirm');
    Route::get('studentdetails', 'PagesController@studentdetails');
    Route::get('studentdetails_vertical', 'PagesController@studentdetails_vertical');
    Route::get('confirm_intern/{confirmation_code_intern}','JobSeekerController@confirm_intern');
    Route::get('studentinfo', 'PagesController@studentinfo');
    Route::get('employerinfo', 'PagesController@employerinfo');

    Route::get('student_account', 'PagesController@student_account');
     Route::get('getuser','JobSeekerController@getuser');
    Route::post('change_password', 'JobSeekerController@change_password_intern');
    Route::get('employer_account', 'PagesController@employer_account');
    Route::get('getuser','EmployeeController@getuser');
    Route::get('show_links','EmployeeController@show_links');
    Route::post('change_password', 'EmployeeController@change_password');
    
    Route::get('postjob', 'PagesController@postjob');

    Route::get('formVerify', function () {
        return 'welcome! Recieved your form values!';
    });

    Route::post('formVerify', function () {
        return 'welcome! Recieved your form values! Post method used this time';
    });
    Route::get('employer','EmployeeController@show');
    Route::post('employer', 'EmployeeController@store');
    Route::post('details', 'EmployeeController@details');
   // Route::get('employee','EmployeeController@show');
    Route::post('student', 'JobSeekerController@store');
    Route::post('student_info','JobSeekerController@student_info');
    Route::post('education','JobSeekerController@education');
    Route::post('technical_skill','JobSeekerController@technical_skill');  
    Route::post('nontechnical','JobSeekerController@nontechnical'); 
    Route::post('certifications','JobSeekerController@certifications'); 
       
    Route::post('languages','JobSeekerController@languages'); 
    Route::post('intern_links','JobSeekerController@intern_links'); 
    Route::post('internships','JobSeekerController@internships'); 
    Route::post('volunteer_activity','JobSeekerController@volunteer_activity');
    Route::post('accomplishment','JobSeekerController@accomplishment');
     Route::post('participation','JobSeekerController@participation');
   Route::post('training','JobSeekerController@training');  
    Route::get('hello', function () {
        return 'welcome to first route';
    });
    route::post('add_links', 'EmployeeController@add_links');
    route::post('post_internship', 'InternshipApplicationController@post_internship');
    route::get('show_internship', 'InternshipApplicationController@show_internship');
    route::post('update_internship', 'InternshipApplicationController@update_internship');
    route::post('add_intern', 'InternshipApplicationController@add_intern');
    route::get('getinternship', 'InternshipApplicationController@getinternship');
    route::get('getinterns', 'InternshipApplicationController@getinterns');
    route::get('getinterns', 'InternshipApplicationController@getinterns');
    route::get('sortby_date', 'InternshipApplicationController@sortby_date');
    route::get('sortby_location', 'InternshipApplicationController@sortby_location');
    route::get('sortby_type', 'InternshipApplicationController@sortby_type');
    route::get('sortby_category', 'InternshipApplicationController@sortby_category');
    Route::get('fruits/{name?}', function ($name) {
        return $name . 'is the selected fruit route';
    });

    Route::get('fruits/{name}', function ($name = apple) {

        if ($name == apple) {
            return 'Default value is taken';
        }
        return $name . 'is the selected fruit route';
    });

    Route::get('/', function () {
        return view('index');
    });
});
