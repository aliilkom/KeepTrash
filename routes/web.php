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

Route::get('/editprofile', function () {
    return view('profile.edit');
});

Auth::routes();
//Dashboard 
//Pengepul
Route::get('/home', 'HomeController@pengepul')->middleware('pengepul');
//Penyetor
Route::get('/dashboard', 'HomeController@penyetor')->middleware('penyetor');
//Barang Bekas
Route::resource('barangbekas', 'BarangbekasController');
//Tukar Poin
Route::resource('tukarpoin', 'TukarpoinController');
//Reward
Route::resource('reward', 'RewardController');
//Profil
Route::resource('profile', 'ProfileController');
//Detail Pengepul
Route::resource('detailpengepul', 'DetailpengepulController');
//Transaksi
Route::resource('transaksi', 'TransaksiController');