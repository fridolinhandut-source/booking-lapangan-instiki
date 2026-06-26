@extends('layout')

@section('title', 'Kalender')
@section('page_title', 'Kalender Booking')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        ✓ {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-xl font-bold text-gray-900">Juni 2026</h3>
            <div class="flex gap-2">
                <button onclick="alert('Bulan sebelumnya')" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">← Sebelumnya</button>
                <button onclick="alert('Bulan berikutnya')" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">Berikutnya →</button>
            </div>
        </div>

        <div class="grid grid-cols-7 gap-2 mb-2">
            <div class="text-center font-bold text-gray-700 py-2">Min</div>
            <div class="text-center font-bold text-gray-700 py-2">Sen</div>
            <div class="text-center font-bold text-gray-700 py-2">Sel</div>
            <div class="text-center font-bold text-gray-700 py-2">Rab</div>
            <div class="text-center font-bold text-gray-700 py-2">Kam</div>
            <div class="text-center font-bold text-gray-700 py-2">Jum</div>
            <div class="text-center font-bold text-gray-700 py-2">Sab</div>
        </div>

        <div class="grid grid-cols-7 gap-2">
            @for($i = 1; $i <= 30; $i++)
            @php
                $hasBooking = in_array($i, [15, 20, 25]);
                $isToday = $i == 26;
            @endphp
            <div class="border border-gray-200 rounded-lg p-3 min-h-[80px] {{ $isToday ? 'bg-blue-50 border-blue-500' : 'hover:bg-gray-50' }} cursor-pointer" onclick="alert('Tanggal {{ $i }} Juni 2026{{ $hasBooking ? ' - Ada booking!' : '' }}')">
                <div class="font-semibold {{ $isToday ? 'text-blue-600' : 'text-gray-700' }}">{{ $i }}</div>
                @if($hasBooking)
                <div class="mt-1 text-xs bg-orange-500 text-white px-2 py-1 rounded">Booking</div>
                @endif
            </div>
            @endfor
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Jadwal Booking Bulan Ini</h3>
        
        <div class="space-y-3">
            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex flex-col items-center justify-center">
                        <span class="text-xs">Jun</span>
                        <span class="font-bold">15</span>
                    </div>
                    <div>
                        <p class="font-semibold">Lapangan Basket A</p>
                        <p class="text-sm text-gray-500">10:00 - 11:00</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="alert('Edit booking')" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                    <button onclick="if(confirm('Batalkan booking?')) { alert('Booking dibatalkan!'); this.closest('.flex').remove(); }" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Batal</button>
                </div>
            </div>

            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex flex-col items-center justify-center">
                        <span class="text-xs">Jun</span>
                        <span class="font-bold">20</span>
                    </div>
                    <div>
                        <p class="font-semibold">Lapangan Basket B</p>
                        <p class="text-sm text-gray-500">14:00 - 15:00</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="alert('Edit booking')" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                    <button onclick="if(confirm('Batalkan booking?')) { alert('Booking dibatalkan!'); this.closest('.flex').remove(); }" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Batal</button>
                </div>
            </div>

            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex flex-col items-center justify-center">
                        <span class="text-xs">Jun</span>
                        <span class="font-bold">25</span>
                    </div>
                    <div>
                        <p class="font-semibold">Lapangan Basket C</p>
                        <p class="text-sm text-gray-500">08:00 - 09:00</p>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="alert('Edit booking')" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">Edit</button>
                    <button onclick="if(confirm('Batalkan booking?')) { alert('Booking dibatalkan!'); this.closest('.flex').remove(); }" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">Batal</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection