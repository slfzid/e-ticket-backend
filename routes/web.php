<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/beranda', [PageController::class, 'beranda']);
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::delete('/logoutAd', [AuthController::class, 'logoutAd'])->name('logoutAd');
    Route::get('/admindashboard', [PageController::class, 'admindashboard']);
});

Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

