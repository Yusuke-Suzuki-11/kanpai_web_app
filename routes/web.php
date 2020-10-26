<?php
//
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('index', 'UserController@index')->name('user.index');
    Route::get('show/{id}', 'UserController@show')->name('user.show');
    Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('management', 'UserController@member_management')->name('user.create');
    Route::post('update/{id}', 'UserController@user_profile_update')->name('user.update');
});
