<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::group(['prefix' => 'xxx'], function() {
    Route::get('bbb','Admin\AAAController@bbb');
});

Route::group(['admin' => 'add'], function() {
    Route::get('profile/create','Admin\ProfileController@add');
});

Route::group(['admin' => 'edit'], function(){
    Route::get('profile/edit','Admin\ProfileController@edit');
});