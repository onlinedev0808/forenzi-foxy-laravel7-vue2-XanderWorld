<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json(Auth::user());
});

Route::namespace('api')->group(function () {
    Route::get('/products', 'ProductController@index');
    Route::get('/products/{id}', 'ProductController@show');
    // Route::get('/products/{id}', 'ProductController@destroy');

    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/{id}', 'CategoryController@show');

    Route::get('/orders', 'OrderController@index');
    Route::put('/orders', 'OrderController@show');
    Route::post('/orders', 'OrderController@create');
    Route::post('/orders/{id}', 'OrderController@update');
    Route::post('/orders/transmit/{id}', 'OrderController@transmit');
    
    Route::get('/cart/{id}', 'OrderController@create');

    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');

    Route::get('/user', function(Request $request) {     
        return response()->json(['name' => Auth::user()->name]);
    });
});
