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
    Route::get('add', 'UserController@add')->name('user.add');
    Route::post('management', 'UserController@member_management')->name('user.create');
    Route::post('update/{id}', 'UserController@user_profile_update')->name('user.update');
});

Route::group(['prefix' => 'group', 'middleware' => 'auth'], function () {
    Route::get('index', 'GroupController@index')->name('group.index');
    Route::get('add', 'GroupController@add')->name('group.add');
    Route::post('store', 'GroupController@store')->name('group.store');
});
