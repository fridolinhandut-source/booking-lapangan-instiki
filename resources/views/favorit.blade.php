@extends('layout')

@section('title', 'Favorit')
@section('page_title', 'Lapangan Favorit')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="notification-area"></div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-900">Lapangan Favorit Saya</h3>
            <a href="{{ route('cari.lapangan') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">+ Tambah Favorit</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="favorit-list">
            <div class="favorit-item border-2 border-gray-200 rounded-xl p-6 relative hover:shadow-lg transition" data-id="1">
                <button onclick="removeFavorit(1)" class="absolute top-4 right-4 text-red-500 hover:text-red-700 bg-white rounded-full p-2 shadow">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="bg-gradient-to-br from-orange-400 to-red-500 h-40 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-5xl">🏀</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket A</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta Selatan</p>
                <p class="text-xl font-bold text-orange-600 mb-4">Rp 150.000<span class="text-sm text-gray-500">/jam</span></p>
                <a href="{{ route('pembayaran') }}" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>

            <div class="favorit-item border-2 border-gray-200 rounded-xl p-6 relative hover:shadow-lg transition" data-id="2">
                <button onclick="removeFavorit(2)" class="absolute top-4 right-4 text-red-500 hover:text-red-700 bg-white rounded-full p-2 shadow">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="bg-gradient-to-br from-green-400 to-teal-500 h-40 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-5xl"></span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket C</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta Timur</p>
                <p class="text-xl font-bold text-orange-600 mb-4">Rp 180.000<span class="text-sm text-gray-500">/jam</span></p>
                <a href="{{ route('pembayaran') }}" class="block text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>
        </div>

        <div id="empty-favorit" class="text-center py-12 hidden">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
            <p class="text-gray-500 font-semibold">Belum ada lapangan favorit</p>
            <a href="{{ route('cari.lapangan') }}" class="text-blue-600 hover:text-blue-800 font-semibold mt-2 inline-block">Cari Lapangan →</a>
        </div>
    </div>
</div>

<script>
function removeFavorit(id) {
    if (confirm('Yakin ingin menghapus dari favorit?')) {
        const item = document.querySelector(`[data-id="${id}"]`);
        if (item) {
            item.remove();
            showNotification('️ Berhasil dihapus dari favorit!', 'success');
            checkEmpty();
        }
    }
}

function checkEmpty() {
    const list = document.getElementById('favorit-list');
    const empty = document.getElementById('empty-favorit');
    if (list.children.length === 0) {
        empty.classList.remove('hidden');
    }
}

function showNotification(message, type) {
    const area = document.getElementById('notification-area');
    const notif = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-100 border-green-500 text-green-700' : 'bg-red-100 border-red-500 text-red-700';
    const icon = type === 'success' 
        ? '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>'
        : '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>';
    
    notif.className = `${bgColor} border-2 px-6 py-4 rounded-lg mb-4 flex items-center justify-between shadow-lg`;
    notif.innerHTML = `
        <div class="flex items-center">
            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">${icon}</svg>
            <p class="font-bold text-lg">${message}</p>
        </div>
        <button onclick="this.parentElement.remove()" class="text-2xl font-bold">✕</button>
    `;
    area.appendChild(notif);
    setTimeout(() => notif.remove(), 3000);
}
</script>
@endsection