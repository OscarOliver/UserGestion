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

Route::post('/users/{user}', 'UsersController@store');

Route::get('/users/{user}/edit', 'UsersController@edit');


Route::get('profile', 'ProfileController')->middleware('auth');

Route::get('profile/edit', 'EditProfileController')->middleware('auth');