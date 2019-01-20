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

Route::get('/', 'HomeController@homePage')->name("home");


Route::get('/about','HomeController@aboutPage');
Route::get('/services','HomeController@servicesPage');
Route::get('/contact','HomeController@contactPage');

Route::get('/shop/create','ShopController@create')->name('create');
Route::get('/shop/product/{id}','ShopController@product');
