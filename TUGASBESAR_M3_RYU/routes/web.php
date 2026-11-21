<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenghuniController;
use App\Http\Middleware\CanManage;
use App\Models\Penghuni;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('dashboard'));

// Hanya untuk yang BELUM login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Hanya untuk yang SUDAH login (admin, staff, dan user biasa)
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', fn () => view('dashboard', [
        'totalPenghuni' => Penghuni::count(),
    ]))->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // LIHAT data: semua yang sudah login
    Route::get('/penghuni', [PenghuniController::class, 'index'])->name('penghuni.index');

    // TAMBAH / EDIT / HAPUS: hanya admin dan staff
    Route::middleware(CanManage::class)->group(function () {
        Route::resource('penghuni', PenghuniController::class)->except(['index', 'show']);
    });
});