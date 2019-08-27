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

Route::get('/', 'HomeController@index')->name('home');
//Este grupo de rutas controla si el usuario es administrador o no
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    Route::resource('/products', 'AdminProductController');
    Route::resource('/users', 'AdminUserController');
});
Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Auth::routes();
