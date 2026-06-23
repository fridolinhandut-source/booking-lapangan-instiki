<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoopBookController;

// AUTH ROUTES (login, register, dll)
require __DIR__.'/auth.php';

// PROTECTED ROUTES (Hanya bisa diakses jika sudah login)
Route::middleware(['auth'])->group(function () {

    // Rute utama (root) sebagai Dashboard
    Route::get('/', [HoopBookController::class, 'dashboard'])->name('dashboard');
    
    // Tambahan: Rute eksplisit agar tidak terjadi 404 saat redirect ke /dashboard
    Route::get('/dashboard', [HoopBookController::class, 'dashboard']);

    // MENU SIDEBAR
    Route::view('/cari-lapangan', 'cari')->name('menu.cari');
    Route::view('/booking-saya', 'booking')->name('menu.booking');
    Route::view('/kalender', 'kalender')->name('menu.kalender');
    Route::view('/pembayaran', 'pembayaran')->name('menu.pembayaran');
    Route::view('/promo', 'promo')->name('menu.promo');
    Route::view('/favorit', 'favorit')->name('menu.favorit');
    Route::view('/ulasan', 'ulasan')->name('menu.ulasan');
    Route::view('/pesan', 'pesan')->name('menu.pesan');
    Route::view('/pengaturan', 'pengaturan')->name('menu.pengaturan');
    Route::view('/bantuan', 'bantuan')->name('menu.bantuan');

    // DATABASE ACTION
    Route::post('/lapangan/store', [HoopBookController::class, 'storeLapangan'])->name('lapangan.store');
    Route::delete('/lapangan/destroy/{id}', [HoopBookController::class, 'destroyLapangan'])->name('lapangan.destroy');
});