@extends('layout')

@section('title', 'Cari Lapangan')
@section('page_title', 'Cari Lapangan Basket')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center justify-between">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
        <button onclick="this.parentElement.remove()" class="text-green-700 hover:text-green-900">✕</button>
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Cari Lapangan</h3>
        
        <div class="mb-6">
            <input type="text" placeholder="Cari lapangan basket..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(['A', 'B', 'C'] as $lapangan)
            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                <div class="bg-gray-200 h-48 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-gray-400">Foto Lapangan {{ $lapangan }}</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket {{ $lapangan }}</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta {{ $lapangan === 'A' ? 'Selatan' : ($lapangan === 'B' ? 'Barat' : 'Timur') }}</p>
                <p class="text-gray-600 mb-4">⭐ 4.{{ 6 + $loop->index }} ({{ 80 + $loop->index * 30 }} ulasan)</p>
                <p class="text-2xl font-bold text-orange-600 mb-4">Rp {{ 120 + $loop->index * 30 }}.000<span class="text-sm text-gray-500">/jam</span></p>
                <form action="{{ route('booking.store') }}" method="POST" class="space-y-3">
                    @csrf
                    <input type="hidden" name="lapangan_id" value="{{ $loop->index + 1 }}">
                    <input type="date" name="tanggal" required class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm">
                    <select name="jam" required class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm">
                        <option value="">Pilih Jam</option>
                        <option value="08:00-09:00">08:00 - 09:00</option>
                        <option value="09:00-10:00">09:00 - 10:00</option>
                        <option value="10:00-11:00">10:00 - 11:00</option>
                    </select>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection