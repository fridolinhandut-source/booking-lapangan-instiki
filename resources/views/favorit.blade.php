@extends('layout')

@section('title', 'Favorit')
@section('page_title', 'Lapangan Favorit')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        ✓ {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Lapangan Favorit Saya</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="border border-gray-200 rounded-xl p-6 relative">
                <button onclick="if(confirm('Hapus dari favorit?')) { alert('Berhasil dihapus!'); this.closest('.border').remove(); }" class="absolute top-4 right-4 text-red-500 hover:text-red-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="bg-gradient-to-br from-orange-400 to-red-500 h-40 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-5xl">🏀</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket A</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta Selatan</p>
                <p class="text-xl font-bold text-orange-600 mb-4">Rp 150.000<span class="text-sm text-gray-500">/jam</span></p>
                <a href="#" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>

            <div class="border border-gray-200 rounded-xl p-6 relative">
                <button onclick="if(confirm('Hapus dari favorit?')) { alert('Berhasil dihapus!'); this.closest('.border').remove(); }" class="absolute top-4 right-4 text-red-500 hover:text-red-700">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="bg-gradient-to-br from-green-400 to-teal-500 h-40 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-5xl">🏀</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket C</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta Timur</p>
                <p class="text-xl font-bold text-orange-600 mb-4">Rp 180.000<span class="text-sm text-gray-500">/jam</span></p>
                <a href="#" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>

            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center flex flex-col justify-center items-center">
                <svg class="w-12 h-12 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                <p class="text-gray-500 mb-2">Tambahkan lapangan favorit</p>
                <a href="{{ route('cari.lapangan') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Cari Lapangan →</a>
            </div>
        </div>
    </div>
</div>
@endsection