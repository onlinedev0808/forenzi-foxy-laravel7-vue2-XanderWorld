<?php

use App\Models\userDetail;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


// ! proteggo tutte le rotte con il middleware: devo essere autenticato altrimenti non mi viene restituita la pagina di login
Route::middleware('auth')
    //! aggiorna ogni url
    ->prefix('admin')
    //! aggiorna la cartella all'interno della quale si trovano i controller 
    ->namespace('Admin')
    //! aggiorna la cartella all'interno della quale si trovani i blade
    ->name('admin.')
    ->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('/products', 'ProductController');
        Route::resource('/orders', 'OrderController');
        Route::resource('/payments', 'PaymentController');
        Route::resource('/users', 'UserController');
    });

Route::get("{any?}", function () {
    return view("guest.home");
})->where("any", ".*");


