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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/banks','BankController');
Route::resource('/ibans','IbanController');

Route::get('/iban/{iban}','IbanVerificationController@get');
Route::get('/iban//verify/{iban}','IbanVerificationController@verify');


Route::get('/profile',function(){
    return view('pages.tokens.index');
});