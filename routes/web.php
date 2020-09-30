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

Route::get('/', 'HomeController@index')->name('Home');

//Route::get('home', 'HomeController@index');


Route::get('products', 'ProductController@index')->name('productHome');
Route::get('product/add', 'ProductController@add')->name('productAdd');
Route::get('product/{product}/edit', 'ProductController@edit')->name('productEdit');
Route::get('product/{product}', 'ProductController@show')->name('productShowPage');
Route::put('product/{product}', 'ProductController@update')->name('productUpdate');
Route::post('product/store','ProductController@store')->name('productStore');
Route::get('cart/add/{product}' , 'CartController@add')->name('CartAdd');
Route::get('cart/get', 'CartController@view')->name('showCart');
Route::get('cart/del', 'CartController@empty')->name('delete');
Route::put('update-cart', 'CartController@update')->name('updateCart');
Route::delete('remove-from-cart', 'CartController@remove')->name('removeFromCart');
