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

Route::get('clients'            ,'ClientController@index');
Route::get('clients/{client}'   ,'ClientController@show');
Route::post('clients'           ,'ClientController@store');
Route::put('clients/{client}'   ,'ClientController@update');
Route::delete('clients/{client}','ClientController@destroy');

Route::get('categories'              ,'CategoryController@index');
Route::get('categories/{category}'   ,'CategoryController@show');
Route::post('categories'             ,'CategoryController@store');
Route::put('categories/{category}'   ,'CategoryController@update');
Route::delete('categories/{category}','CategoryController@destroy');

Route::get('payment_modes'                 ,'PaymentModeController@index');
Route::get('payment_modes/{paymentMode}'   ,'PaymentModeController@show');
Route::post('payment_modes'                ,'PaymentModeController@store');
Route::put('payment_modes/{paymentMode}'   ,'PaymentModeController@update');
Route::delete('payment_modes/{paymentMode}','PaymentModeController@destroy');
