<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Semua halaman butuh login
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cari-lapangan', function () {
        return view('cari-lapangan');
    })->name('cari.lapangan');

    Route::get('/booking-saya', function () {
        return view('booking-saya');
    })->name('booking.saya');

    Route::get('/kalender', function () {
        return view('kalender');
    })->name('kalender');

    Route::get('/pembayaran', function () {
        return view('pembayaran');
    })->name('pembayaran');

    Route::get('/promo', function () {
        return view('promo');
    })->name('promo');

    Route::get('/favorit', function () {
        return view('favorit');
    })->name('favorit');

    Route::get('/ulasan', function () {
        return view('ulasan');
    })->name('ulasan');

    Route::get('/pesan', function () {
        return view('pesan');
    })->name('pesan');

    Route::get('/pengaturan', function () {
        return view('pengaturan');
    })->name('pengaturan');

    Route::get('/bantuan', function () {
        return view('bantuan');
    })->name('bantuan');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';