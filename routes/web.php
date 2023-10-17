<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\programstudiController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\jadwalkuliahController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/matakuliah', [matakuliahController::class, 'index']);
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/jadwalkuliah', [jadwalkuliahController::class, 'index']);
Route::get('/pembayaran', [pembayaranController::class, 'index']);
Route::get('/programstudi', [programstudiController::class, 'index']);

