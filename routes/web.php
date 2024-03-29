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
Route::get('/faqs', 'PagesController@faqs')->name('faqs');

Route::get('/products/show/{id}', 'ProductController@show')->name('show');
Route::get('/search', 'ProductController@search')->name('product.search');
Route::get('/products/more/{id}', 'ProductController@more')->name('more');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    Route::resource('/products', 'AdminProductController');
    Route::resource('/users', 'AdminUserController');
});

Route::get('/products/create', 'AdminProductController@create')->name('products.create');
Route::post('/products/store', 'AdminProductController@store')->name('products.store');

Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::group(['prefix' => 'cart'], function() {
   Route::get('/', 'CartController@index')->name('cart');
   Route::get('/add/{product_id}', 'CartController@add')->name('cart.add');
   Route::delete('/remove/{product_id}', 'CartController@remove')->name('cart.remove');
   Route::get('/checkout', 'CartController@checkout')->name('cart.checkout');
   Route::get('/flush', 'CartController@flush')->name('cart.flush');
});

Auth::routes();
