@extends('layout')

@section('title', 'Daftar Booking - MitaApp')
@section('page_title', 'Riwayat & Jadwal Booking')

@section('content')
<div class="space-y-4">
    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-2xl font-bold"><i class="fa-solid fa-building"></i></div>
            <div>
                <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full" contenteditable="true" id="book-status" onblur="saveToStorage('book-status', this.innerText)">Terkonfirmasi</span>
                <h4 class="font-bold text-gray-800 mt-1.5 text-base" contenteditable="true" id="book-name" onblur="saveToStorage('book-name', this.innerText)">Premium Desk - Mitra Workspace</h4>
                <p class="text-xs text-gray-400 mt-0.5" contenteditable="true" id="book-date" onblur="saveToStorage('book-date', this.innerHTML)"><i class="fa-regular fa-calendar-days mr-1"></i> 28 Juni 2026 (09:00 - 17:00)</p>
            </div>
        </div>
        <div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-end">
            <div><p class="text-xs text-gray-400 md:text-right">Total Bayar</p><p class="font-bold text-gray-800" contenteditable="true" id="book-total" onblur="saveToStorage('book-total', this.innerText)">Rp 150.000</p></div>
        </div>
    </div>
</div>
@endsection