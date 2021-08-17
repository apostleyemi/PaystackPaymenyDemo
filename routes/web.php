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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getform', 'App\Http\Controllers\PaymentController@show')->name('form');

// Laravel 5.1.17 and above
Route::post('/pay', 'App\Http\Controllers\PaymentController@redirectToGateway')->name('pay');

// Laravel 8
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);



