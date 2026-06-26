@extends('layout')

@section('title', 'Pesan')
@section('page_title', 'Pesan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        ✓ {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-900">Kotak Masuk</h3>
            <button onclick="alert('Fitur pesan baru')" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 font-semibold">+ Pesan Baru</button>
        </div>
        
        <div class="space-y-3">
            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer bg-blue-50">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-2">
                            <h4 class="font-bold text-gray-900">Admin INSTIKI</h4>
                            <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full">Baru</span>
                        </div>
                        <p class="font-semibold text-gray-800 mb-1">Konfirmasi Booking Anda</p>
                        <p class="text-sm text-gray-600">Terima kasih! Booking lapangan Anda untuk tanggal 25 Juni 2026 telah dikonfirmasi...</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500">10:30</p>
                        <button onclick="event.stopPropagation(); if(confirm('Hapus pesan ini?')) { alert('Pesan dihapus!'); this.closest('.border').remove(); }" class="mt-2 text-red-500 hover:text-red-700 text-sm">Hapus</button>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900 mb-2">Promo Spesial</h4>
                        <p class="font-semibold text-gray-800 mb-1">Diskon 20% Weekend Ini!</p>
                        <p class="text-sm text-gray-600">Dapatkan diskon 20% untuk booking lapangan di weekend ini. Gunakan kode WEEKEND20...</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500">Kemarin</p>
                        <button onclick="event.stopPropagation(); if(confirm('Hapus pesan ini?')) { alert('Pesan dihapus!'); this.closest('.border').remove(); }" class="mt-2 text-red-500 hover:text-red-700 text-sm">Hapus</button>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <h4 class="font-bold text-gray-900 mb-2">Sistem</h4>
                        <p class="font-semibold text-gray-800 mb-1">Pembayaran Berhasil</p>
                        <p class="text-sm text-gray-600">Pembayaran Anda sebesar Rp 150.000 telah berhasil diproses...</p>
                    </div>
                    <div class="text-right">
                        <p class="text-xs text-gray-500">2 hari lalu</p>
                        <button onclick="event.stopPropagation(); if(confirm('Hapus pesan ini?')) { alert('Pesan dihapus!'); this.closest('.border').remove(); }" class="mt-2 text-red-500 hover:text-red-700 text-sm">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection