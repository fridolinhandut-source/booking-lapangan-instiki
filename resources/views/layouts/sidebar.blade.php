<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">

<aside class="w-64 bg-[#0b1e3d] text-white fixed left-0 top-0 bottom-0 flex flex-col z-50">
    
    <!-- LOGO INSTIKI -->
    <div class="px-4 py-6 border-b border-slate-800 flex flex-col items-center text-center bg-white">
        <img src="{{ asset('images/instiki.png') }}" alt="INSTIKI" class="w-32 h-auto object-contain mb-2">
    </div>
    <div class="px-4 py-3 bg-[#0b1e3d] text-center border-b border-slate-800">
        <h2 class="text-xs font-bold text-orange-400 tracking-wider uppercase">Selamat Datang di<br>Sistem Booking Lapangan</h2>
    </div>

    <!-- MENU -->
    <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('dashboard') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-house w-5"></i> Dashboard
        </a>
        <a href="{{ route('cari.lapangan') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('cari.lapangan') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-magnifying-glass w-5"></i> Cari Lapangan
        </a>
        <a href="{{ route('booking.saya') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('booking.saya') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-calendar-check w-5"></i> Booking Saya
        </a>
        <a href="{{ route('kalender') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('kalender') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-calendar w-5"></i> Kalender
        </a>
        <a href="{{ route('pembayaran') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('pembayaran') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-credit-card w-5"></i> Pembayaran
        </a>
        <a href="{{ route('promo') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('promo') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-tag w-5"></i> Promo
        </a>
        <a href="{{ route('favorit') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('favorit') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-heart w-5"></i> Favorit
        </a>
        <a href="{{ route('ulasan') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('ulasan') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-star w-5"></i> Ulasan
        </a>
        <a href="{{ route('pesan') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('pesan') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-envelope w-5"></i> Pesan
        </a>
        <a href="{{ route('pengaturan') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('pengaturan') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-gear w-5"></i> Pengaturan
        </a>
        <a href="{{ route('bantuan') }}" class="flex items-center gap-3 px-4 py-2.5 {{ request()->routeIs('bantuan') ? 'bg-orange-500 text-white' : 'text-slate-300 hover:bg-slate-800' }} rounded-lg font-medium text-sm transition">
            <i class="fa-solid fa-circle-question w-5"></i> Bantuan
        </a>
    </nav>

    <!-- LOGOUT -->
    <div class="p-3 border-t border-slate-800">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-red-400 hover:bg-red-500/10 rounded-lg font-medium text-sm transition">
                <i class="fa-solid fa-right-from-bracket w-5"></i> Log Out
            </button>
        </form>
    </div>
</aside>