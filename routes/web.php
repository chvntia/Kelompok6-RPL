<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\desaController;
use App\Http\Controllers\layananController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/anggota',[userController::class, 'index'])->name('user.index');
    Route::get('/anggota/approval',[userController::class, 'approval'])->name('user.approval');
    Route::get('/berita/add',[beritaController::class, 'index'])->name('berita.add');
    Route::get('/berita/approval',[beritaController::class, 'approval'])->name('berita.approval');
    Route::get('/berita',[beritaController::class, 'show'])->name('berita.show');
    Route::get('/berita/update/{id}',[beritaController::class, 'update'])->name('berita.update');
    Route::get('/desa/kegiatan',[desaController::class, 'kegiatan'])->name('desa.kegiatan');
    Route::get('/desa/approval',[desaController::class, 'approval'])->name('desa.approval');
    Route::get('/desa/show',[desaController::class, 'show'])->name('desa.show');
    Route::get('/layanan/add',[layananController::class, 'add'])->name('layanan.add');
    Route::get('/layanan/approval',[layananController::class, 'approval'])->name('layanan.approval');
    Route::get('/layanan/show',[layananController::class, 'show'])->name('layanan.show');
    
});