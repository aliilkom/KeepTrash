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
    return view('pages.auth');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/barangbekas', function () {
    return view('pages.barangbekas');
});
Route::get('/tukarpoin', function () {
    return view('pages.tukarpoin');
});
Route::get('/reward', function () {
    return view('pages.reward');
});
