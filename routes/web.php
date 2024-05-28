
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\KelurahanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Hanna Anggraini siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/periksa', [PeriksaController::class, 'index']);
Route::get('/paramedik', [ParamedikController::class, 'index']);
Route::get('/kelurahan', [KelurahanController::class, 'index']);
