<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoopBookController extends Controller
{
    public function cari()
    {
        return view('cari-lapangan');
    }

    public function bookingSaya()
    {
        return view('booking-saya');
    }

    public function kalender()
    {
        return view('kalender');
    }

    public function pembayaran()
    {
        return view('pembayaran');
    }

    public function promo()
    {
        return view('promo');
    }

    public function favorit()
    {
        return view('favorit');
    }

    public function ulasan()
    {
        return view('ulasan');
    }

    public function pesan()
    {
        return view('pesan');
    }

    public function pengaturan()
    {
        return view('pengaturan');
    }

    public function bantuan()
    {
        return view('bantuan');
    }
}