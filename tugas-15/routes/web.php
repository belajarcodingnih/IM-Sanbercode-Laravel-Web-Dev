<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcomee');
// });

Route::get('/home', [DashboardController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/data-tables', function () {
    return view('page.data-table');
});

Route::get('/tables', function () {
    return view('page.table');
});

// CRUD
// menampilkan semua list data
Route::get('/cast', [CastController::class, 'index']);

// create data
Route::get('/cast/create', [CastController::class, 'create']);

//mengirimkan data ke database atau tambah data ke database
Route::post('/cast', [CastController::class, 'store']);

//Detail list berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
