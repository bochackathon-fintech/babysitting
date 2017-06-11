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

Route::get('/iban/{id}',function(){


});

Route::middleware('auth:api')->get('/iban/verify/{iban}','IbanVerificationController@verify');
Route::middleware('auth:api')->get('/iban/publish/{iban}','IbanVerificationController@verify');
Route::middleware('auth:api')->get('/user/iban/{uid}','IbanController@getUserIban');
