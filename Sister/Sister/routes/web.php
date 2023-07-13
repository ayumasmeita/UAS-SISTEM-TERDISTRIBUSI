<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    return view('Kecak');
});


Route::get('/Deskripsi', function () {
    return view('Deskripsi');
});

Route::get('/Beranda', function () {
    return view('Beranda');
});

Route::get('/Boking Now', function () {
    return view('Boking Now');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin' ]) ->name('postlogin');

