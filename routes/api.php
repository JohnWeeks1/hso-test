<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('stages', 'Api\StageController@index');
Route::get('stages/{id}', 'Api\StageController@show');

Route::get('accounts', 'Api\AccountController@index');
Route::get('accounts/{id}', 'Api\AccountController@show');

Route::get('products', 'Api\ProductController@index');
Route::get('products/{id}', 'Api\ProductController@show');

Route::get('orders', 'Api\OrderController@index');
Route::get('orders/{id}', 'Api\OrderController@show');
Route::post('orders', 'Api\OrderController@store');
Route::patch('orders/{id}', 'Api\OrderController@update');
Route::delete('orders/{id}', 'Api\OrderController@destroy');
