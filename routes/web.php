<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\beritaController;

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
    
});
