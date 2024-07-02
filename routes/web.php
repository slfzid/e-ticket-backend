<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ticketController;
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

// Group akses khusus guest 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'register'])->name('register');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
    Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
    Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');

    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

// Group akses umum yang dihandle di controller
Route::group([], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Group akses user
Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {
    Route::post('/storeTicket', [TicketController::class, 'store'])->name('storeTicket');

// Rute untuk meng-handle pencarian tiket
    Route::post('/findTicket', [TicketController::class, 'findTicket'])->name('findTicket');

    Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
    Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
    Route::get('/cekpengaduan', [PageController::class, 'cekpengaduan'])->name('cekpengaduan');
    Route::get('/pengaduan', [PageController::class, 'pengaduan'])->name('pengaduan');
    Route::get('/tentangkami', [PageController::class, 'tentangkami'])->name('tentangkami');
});

// Group akses admin
Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {
    Route::get('/admindashboard', [PageController::class, 'admindashboard']);
    Route::get('/cekdatapengaduan', [PageController::class, 'cekdatapengaduan']);
    Route::get('/getTickets', [TicketController::class, 'getTickets'])->name('getTickets');
    Route::get('/jawabpengaduan', [PageController::class, 'jawabpengaduan']);
});

