@extends('layout')

@section('title', 'Promo')
@section('page_title', 'Promo & Diskon')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        ✓ {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Promo Spesial</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gradient-to-r from-orange-500 to-red-500 rounded-xl p-6 text-white">
                <h4 class="text-2xl font-bold mb-2">Diskon 20%</h4>
                <p class="mb-4">Untuk booking pertama kali! Minimal Rp 100.000</p>
                <p class="text-sm opacity-90 mb-4">Kode: PERTAMA20</p>
                <button onclick="alert('Promo PERTAMA20 berhasil diklaim!')" class="bg-white text-orange-600 px-6 py-2 rounded-lg font-semibold hover:shadow-lg">Klaim Sekarang</button>
            </div>

            <div class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl p-6 text-white">
                <h4 class="text-2xl font-bold mb-2">Weekend Special</h4>
                <p class="mb-4">Diskon 15% setiap weekend! Berlaku Sabtu-Minggu</p>
                <p class="text-sm opacity-90 mb-4">Kode: WEEKEND15</p>
                <button onclick="alert('Promo WEEKEND15 berhasil diklaim!')" class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:shadow-lg">Klaim Sekarang</button>
            </div>

            <div class="bg-gradient-to-r from-green-500 to-teal-500 rounded-xl p-6 text-white">
                <h4 class="text-2xl font-bold mb-2">Cashback Rp 50.000</h4>
                <p class="mb-4">Minimal booking Rp 300.000</p>
                <p class="text-sm opacity-90 mb-4">Kode: CASHBACK50</p>
                <button onclick="alert('Promo CASHBACK50 berhasil diklaim!')" class="bg-white text-green-600 px-6 py-2 rounded-lg font-semibold hover:shadow-lg">Klaim Sekarang</button>
            </div>

            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center">
                <p class="text-gray-500 mb-2">Punya kode promo lain?</p>
                <input type="text" placeholder="Masukkan kode promo" class="w-full px-4 py-2 border border-gray-300 rounded-lg mb-3">
                <button onclick="alert('Kode promo berhasil digunakan!')" class="bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-orange-700">Gunakan</button>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Promo Saya</h3>
        <div class="space-y-3">
            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-semibold">Diskon 20% - PERTAMA20</p>
                    <p class="text-sm text-gray-500">Berlaku sampai 31 Des 2026</p>
                </div>
                <button onclick="alert('Promo digunakan!')" class="text-blue-600 hover:text-blue-800 font-semibold">Gunakan</button>
            </div>
        </div>
    </div>
</div>
@endsection