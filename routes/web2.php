<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);
route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
route::get('/admin/pasien/store', [PasienController::class, 'show'])->name('pasiens.show');
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');
Route::get('/admin/periksa', [PeriksaController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/admin/dokter', [DokterController::class, 'index']);

//kelurahan
route::get('/admin/kelurahan', [KelurahanController::class, 'index'])->name('kelurahans.index');
route::get('/admin/kelurahan/create', [kelurahanController::class, 'create'])->name('kelurahans.create');
route::post('/admin/kelurahan/store', [kelurahanController::class, 'store'])->name('kelurahans.store');
route::get('/admin/kelurahan/store', [kelurahanController::class, 'show'])->name('kelurahans.show');
Route::get('/admin/kelurahan/{kelurahan}/edit', [kelurahanController::class, 'edit'])->name('kelurahans.edit');
Route::put('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'update'])->name('kelurahans.update');
Route::delete('/admin/kelurahan/{kelurahan}', [kelurahanController::class, 'destroy'])->name('kelurahans.destroy');
