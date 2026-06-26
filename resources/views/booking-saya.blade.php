@extends('layout')

@section('title', 'Booking Saya')
@section('page_title', 'Booking Saya')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center justify-between">
        <span>✓ {{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-green-700">✕</button>
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Riwayat Booking Saya</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-lg">Lapangan Basket A</h4>
                        <p class="text-gray-600">📍 Jakarta Selatan</p>
                    </div>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Aktif</span>
                </div>
                <div class="grid grid-cols-3 gap-4 text-sm mb-4">
                    <div>
                        <p class="text-gray-500">Tanggal</p>
                        <p class="font-semibold">25 Juni 2026</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Jam</p>
                        <p class="font-semibold">10:00 - 11:00</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Total</p>
                        <p class="font-semibold text-orange-600">Rp 150.000</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <button class="flex-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 font-semibold">Edit</button>
                    <button class="flex-1 bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 font-semibold">Batalkan</button>
                    <button class="flex-1 bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 font-semibold">Hapus</button>
                </div>
            </div>

            <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-lg">Lapangan Basket B</h4>
                        <p class="text-gray-600">📍 Jakarta Barat</p>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Selesai</span>
                </div>
                <div class="grid grid-cols-3 gap-4 text-sm mb-4">
                    <div>
                        <p class="text-gray-500">Tanggal</p>
                        <p class="font-semibold">20 Juni 2026</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Jam</p>
                        <p class="font-semibold">14:00 - 15:00</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Total</p>
                        <p class="font-semibold text-orange-600">Rp 120.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection