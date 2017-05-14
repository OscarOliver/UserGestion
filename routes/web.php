<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('profile', function () {
//    return view('profile');
//})->middleware('auth');

Route::get('/users', 'UsersController@index');

Route::get('/users/{user}', 'UsersController@show');

Route::put('/users/{user}', 'UsersController@update');

Route::get('/users/{user}/edit', 'UsersController@edit');

Route::get('/users/{user}/change_password', 'UsersController@changePassword');

Route::put('/users/{user}/change_password', 'UsersController@updatePassword');



Route::get('profile', 'ProfileController')->middleware('auth');

Route::get('profile/edit', 'EditProfileController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
