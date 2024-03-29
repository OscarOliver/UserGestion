<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('profile', function () {
//    return view('profile');
//})->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    // -- Users --
    Route::get('/users', 'UsersController@index');

    Route::get('/users/{user}', 'UsersController@show');

    Route::put('/users/{user}', 'UsersController@update');

    Route::get('/users/{user}/edit', 'UsersController@edit');

    Route::get('/users/{user}/change_password', 'UsersController@changePassword');

    Route::put('/users/{user}/change_password', 'UsersController@updatePassword');

    Route::get('/users/{user}/delete', 'UsersController@destroy');


    // -- Reports --
    Route::get('/reports', 'ReportsController@index');

    Route::get('/reports/users_by_name', 'ReportsController@byName');

    Route::get('/reports/users_by_dni', 'ReportsController@byDni');

    Route::get('/reports/users_by_city', 'ReportsController@byCity');

    Route::get('/reports/to_pdf', 'ReportsController@toPDF');
});


Route::get('/page_not_found', function () {
    return view('404');
});

//Route::any('*', function () {
//    return view('404');
//});


//Route::get('profile', 'ProfileController')->middleware('auth');
//
//Route::get('profile/edit', 'EditProfileController')->middleware('auth');
//
//Route::get('/home', 'HomeController@index')->name('home');
