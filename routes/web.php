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
Route::post('update/{id}', 'UserController@update')->name('user.update');
});