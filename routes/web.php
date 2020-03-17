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

Route::resource('wallet', 'WalletController')->middleware('auth');

/* Route::get('wallet', 'WalletController@index')->name('wallet');
Route::get('walletFrom', 'WalletController@create')->name('walletFrom'); */

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
