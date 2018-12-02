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


Route::get('admin/login','Admin\AuthController@showLoginForm');

Route::post('admin/login','Admin\AuthController@login')->name('admin.login');

Route::get('admin/logout','Admin\AuthController@logout')->name('admin.logout');

Route::group(['namespace'=>'Admin','prefix'=>'admin','as'=>'admin.','middleware'=>'admin.auth'],function (){

    Route::get('/','AdminController@index')->name('index');

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
