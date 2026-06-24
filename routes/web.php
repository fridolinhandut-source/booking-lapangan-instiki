<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth','verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cari-lapangan', function () { return view('cari'); })->name('cari.lapangan');
    Route::get('/booking', function () { return view('booking'); })->name('booking');
    Route::get('/bantuan', [FaqController::class, 'index'])->name('bantuan');
    Route::post('/bantuan', [FaqController::class, 'store'])->name('faq.store');
    Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    Route::get('/promo', [PromoController::class, 'index'])->name('promo');
    Route::post('/promo', [PromoController::class, 'store'])->name('promo.store');
    Route::get('/ulasan', [ReviewController::class, 'index'])->name('ulasan');
    Route::post('/ulasan', [ReviewController::class, 'store'])->name('ulasan.store');
    Route::get('/pesan', [BookingController::class, 'index'])->name('pesan');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::post('/booking/{id}/cancel', [BookingController::class, 'cancel'])->name('booking.cancel');
    Route::get('/kalender', function () { return view('kalender'); })->name('kalender');
    Route::get('/pembayaran', function () { return view('pembayaran'); })->name('pembayaran');
    Route::get('/favorit', function () { return view('favorit'); })->name('favorit');
    Route::get('/pengaturan', function () { return view('pengaturan'); })->name('pengaturan');
});

require __DIR__.'/auth.php';