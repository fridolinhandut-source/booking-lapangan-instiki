<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Models\User;

class HoopBookController extends Controller
{
    // Cari Lapangan
    public function cari()
    {
        $lapangan = Field::all();
        return view('cari', compact('lapangan'));
    }

    // Booking Saya
    public function bookingSaya()
    {
        return view('pesan'); // Menggunakan view pesan untuk daftar booking
    }

    // Kalender
    public function kalender()
    {
        return view('kalender');
    }

    // Pembayaran
    public function pembayaran()
    {
        return view('pembayaran');
    }

    // Promo
    public function promo()
    {
        return view('promo');
    }

    // Favorit
    public function favorit()
    {
        return view('favorit');
    }

    // Ulasan
    public function ulasan()
    {
        return view('ulasan');
    }

    // Pesan
    public function pesan()
    {
        return view('pesan');
    }

    // Pengaturan
    public function pengaturan()
    {
        return view('pengaturan');
    }

    // Bantuan
    public function bantuan()
    {
        return view('bantuan');
    }
}