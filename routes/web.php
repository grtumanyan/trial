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

Route::get('/home', 'HomeController@wallet')->name('wallet');
Route::get('/wallet/create', 'HomeController@walletCreate')->name('walletCreate');
Route::post('/wallet', 'HomeController@storeWallet');

Route::get('/record', 'HomeController@record')->name('record');
Route::get('/record/create', 'HomeController@recordCreate')->name('recordCreate');
Route::post('/record', 'HomeController@storeRecord');
