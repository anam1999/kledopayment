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

// Route::get('/', function () {
//     return view('payment.index');
// });

Route::get('payment', 'PaymentController@getpayment')->name('payment');

Route::get('createpayment', 'PaymentController@viewpayment')->name('createpayment');

Route::post('createpayment', 'PaymentController@createpayment')->name('createpayments');

Route::post('deletepayment', 'PaymentController@deletepayment')->name('deletepayment');


 Auth::routes();

