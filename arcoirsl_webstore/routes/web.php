<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\homeController@index')->name("/");

Route::get('/home', 'App\Http\Controllers\homeController@index')->name("/home");

Route::get('/welcome','App\Http\Controllers\homeController@welcome')->name("/welcome"); 

Route::get('/product/{product_id}', 'App\Http\Controllers\productController@getProduct')->name("/product");

Route::get('/404', 'App\Http\Controllers\errorController@index')->name("/404");





