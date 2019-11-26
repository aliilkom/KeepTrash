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
    return view('auth.welcome');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Auth::routes();
//Dashboard
Route::get('/home', 'HomeController@index')->name('home');
//Barang Bekas
Route::resource('barangbekas', 'BarangbekasController');
//Tukar Poin
Route::resource('tukarpoin', 'TukarpoinController');
//Reward
Route::resource('reward', 'RewardController');

