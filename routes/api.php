<?php

use Illuminate\Http\Request;

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
    return $request->user();
});

Route::get('clients'            ,'Api\ClientController@index');
Route::get('clients/{client}'   ,'Api\ClientController@show');
Route::post('clients'           ,'Api\ClientController@store');
Route::put('clients/{client}'   ,'Api\ClientController@update');
Route::delete('clients/{client}','Api\ClientController@destroy');

Route::get('categories'              ,'Api\CategoryController@index');
Route::get('categories/{category}'   ,'Api\CategoryController@show');
Route::post('categories'             ,'Api\CategoryController@store');
Route::put('categories/{category}'   ,'Api\CategoryController@update');
Route::delete('categories/{category}','Api\CategoryController@destroy');

Route::get('payment_modes'                 ,'Api\PaymentModeController@index');
Route::get('payment_modes/{paymentMode}'   ,'Api\PaymentModeController@show');
Route::post('payment_modes'                ,'Api\PaymentModeController@store');
Route::put('payment_modes/{paymentMode}'   ,'Api\PaymentModeController@update');
Route::delete('payment_modes/{paymentMode}','Api\PaymentModeController@destroy');

Route::get('products'             ,'Api\ProductController@index');
Route::get('products/{product}'   ,'Api\ProductController@show');
Route::post('products'            ,'Api\ProductController@store');
Route::put('products/{product}'   ,'Api\ProductController@update');
Route::delete('products/{product}','Api\ProductController@destroy');

Route::get('invoices'             ,'Api\InvoiceController@index');
Route::get('invoices/{invoice}'   ,'Api\InvoiceController@show');
Route::post('invoices'            ,'Api\InvoiceController@store');
Route::put('invoices/{invoice}'   ,'Api\InvoiceController@update');
Route::delete('invoices/{invoice}','Api\InvoiceController@destroy');
