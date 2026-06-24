@extends('layout')

@section('title', 'Dashboard - MitaApp')
@section('page_title', 'Ringkasan Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-400">Total Booking</p>
            <h3 class="text-3xl font-bold mt-1 text-gray-800" contenteditable="true" id="stat-booking" onblur="saveToStorage('stat-booking', this.innerText)">1,248</h3>
        </div>
        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-calendar-check"></i></div>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-400">Pendapatan</p>
            <h3 class="text-3xl font-bold mt-1 text-gray-800" contenteditable="true" id="stat-income" onblur="saveToStorage('stat-income', this.innerText)">Rp 48.2M</h3>
        </div>
        <div class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-wallet"></i></div>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-400">Pesan Baru</p>
            <h3 class="text-3xl font-bold mt-1 text-gray-800" contenteditable="true" id="stat-chat" onblur="saveToStorage('stat-chat', this.innerText)">12</h3>
        </div>
        <div class="w-12 h-12 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-comment-dots"></i></div>
    </div>
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-gray-400">Rating Rata-rata</p>
            <h3 class="text-3xl font-bold mt-1 text-gray-800" contenteditable="true" id="stat-rating" onblur="saveToStorage('stat-rating', this.innerText)">4.9</h3>
        </div>
        <div class="w-12 h-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl"><i class="fa-solid fa-star"></i></div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm lg:col-span-2">
        <h3 class="font-bold text-gray-800 text-lg mb-4">Aktivitas Terakhir</h3>
        <div class="space-y-4">
            <div class="flex items-center gap-4 p-3 hover:bg-gray-50 rounded-xl transition">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold">R</div>
                <div class="flex-1">
                    <h4 class="font-semibold text-sm" contenteditable="true" id="act-1-title" onblur="saveToStorage('act-1-title', this.innerText)">Rian Adi melakukan booking kamar</h4>
                    <p class="text-xs text-gray-400" contenteditable="true" id="act-1-time" onblur="saveToStorage('act-1-time', this.innerText)">2 menit yang lalu</p>
                </div>
                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold" contenteditable="true" id="act-1-status" onblur="saveToStorage('act-1-status', this.innerText)">Sukses</span>
            </div>
        </div>
    </div>
</div>
@endsection