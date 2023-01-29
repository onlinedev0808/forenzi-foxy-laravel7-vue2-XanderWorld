<?php

use Illuminate\Http\Request;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth')->namespace('api')->group(function () {
    Route::get('/products', 'ProductController@index');
    Route::get('/products/{id}', 'ProductController@show');
    // Route::get('/products/{id}', 'ProductController@destroy');

    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/{id}', 'CategoryController@show');

    Route::get('/orders', 'OrderController@index');
    Route::put('/orders', 'OrderController@show');
    Route::post('/orders', 'OrderController@create');
    Route::delete('/orders', 'OrderController@update');
    
    Route::get('/cart/{id}', 'OrderController@create');

    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');
});
