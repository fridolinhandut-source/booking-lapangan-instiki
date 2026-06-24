@extends('layout')

@section('title', 'Pusat Bantuan - MitaApp')
@section('page_title', 'Ada yang Bisa Kami Bantu?')

@section('content')
<div class="max-w-3xl mx-auto space-y-4">
    <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">
        <h4 class="font-bold text-gray-800 flex items-center justify-between" contenteditable="true" id="faq-q1" onblur="saveToStorage('faq-q1', this.innerText)">Bagaimana cara membatalkan booking?</h4>
        <p class="text-sm text-gray-400 mt-3" contenteditable="true" id="faq-a1" onblur="saveToStorage('faq-a1', this.innerText)">Anda dapat membatalkan pesanan melalui menu Booking -> Pilih Transaksi -> Klik Batalkan Pesanan maksimal 24 jam sebelum jadwal dimulai.</p>
    </div>
</div>
@endsection