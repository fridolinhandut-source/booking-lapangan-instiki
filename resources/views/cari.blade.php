@extends('layout')

@section('title', 'Cari Layanan - MitaApp')
@section('page_title', 'Cari Layanan & Tempat')

@section('content')
<div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm mb-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="md:col-span-2 relative">
            <i class="fa-solid fa-magnifying-glass absolute left-4 top-3.5 text-gray-400"></i>
            <input type="text" id="search-input" placeholder="Cari hotel, coworking..." class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none">
        </div>
        <div>
            <select id="search-select" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none">
                <option>Semua Kategori</option>
                <option>Coworking Space</option>
            </select>
        </div>
        <button onclick="alert('Mencari data: ' + document.getElementById('search-input').value)" class="bg-blue-600 text-white font-semibold py-3 rounded-xl">Cari Sekarang</button>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm group">
        <div class="h-48 bg-gray-200 relative">
            <span class="absolute top-3 right-3 bg-white text-gray-700 px-3 py-1 rounded-full text-xs font-bold shadow" contenteditable="true" id="card-rating" onblur="saveToStorage('card-rating', this.innerHTML)"><i class="fa-solid fa-star text-yellow-400 mr-1"></i>4.8</span>
        </div>
        <div class="p-5">
            <span class="text-xs font-bold text-blue-600 uppercase" contenteditable="true" id="card-cat" onblur="saveToStorage('card-cat', this.innerText)">Coworking Space</span>
            <h4 class="font-bold text-lg text-gray-800 mt-1" contenteditable="true" id="card-title" onblur="saveToStorage('card-title', this.innerText)">Mitra Workspace Sudirman</h4>
            <p class="text-sm text-gray-400 mt-1" contenteditable="true" id="card-loc" onblur="saveToStorage('card-loc', this.innerHTML)"><i class="fa-solid fa-location-dot mr-1"></i> Jakarta Pusat</p>
            <div class="flex justify-between items-center mt-6 border-t border-gray-50 pt-4">
                <span class="font-bold text-lg text-blue-600" contenteditable="true" id="card-price" onblur="saveToStorage('card-price', this.innerHTML)">Rp 150.000<span class="text-xs text-gray-400 font-normal">/hari</span></span>
                <button onclick="alert('Disimpan!')" class="bg-blue-600 text-white px-4 py-2 rounded-xl text-sm font-semibold">Pesan</button>
            </div>
        </div>
    </div>
</div>
@endsection