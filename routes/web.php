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

Route::get('profile/{id}', 'ProfileController')->middleware('auth');

Route::get('profile/edit', 'EditProfileController')->middleware('auth');