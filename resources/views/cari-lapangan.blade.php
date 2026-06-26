@extends('layout')

@section('title', 'Cari Lapangan')
@section('page_title', 'Cari Lapangan Basket')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="notification-area"></div>

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Cari Lapangan Basket</h3>
        
        <div class="mb-6">
            <input type="text" id="search-input" oninput="filterLapangan()" placeholder="🔍 Cari lapangan basket..." class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="lapangan-list">
            <div class="lapangan-card border-2 border-gray-200 rounded-xl p-6 hover:shadow-lg transition" data-nama="lapangan basket a jakarta selatan">
                <div class="bg-gradient-to-br from-orange-400 to-red-500 h-48 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-6xl">🏀</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket A</h4>
                <p class="text-gray-600 mb-2"> Jakarta Selatan</p>
                <p class="text-gray-600 mb-4">⭐ 4.8 (120 ulasan)</p>
                <p class="text-2xl font-bold text-orange-600 mb-4">Rp 150.000<span class="text-sm text-gray-500">/jam</span></p>
                <button onclick="addToFavorit('Lapangan Basket A')" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 font-semibold mb-2">❤️ Tambah Favorit</button>
                <a href="{{ route('pembayaran') }}" class="block text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>

            <div class="lapangan-card border-2 border-gray-200 rounded-xl p-6 hover:shadow-lg transition" data-nama="lapangan basket b jakarta barat">
                <div class="bg-gradient-to-br from-blue-400 to-purple-500 h-48 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-6xl">🏀</span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket B</h4>
                <p class="text-gray-600 mb-2"> Jakarta Barat</p>
                <p class="text-gray-600 mb-4">⭐ 4.6 (89 ulasan)</p>
                <p class="text-2xl font-bold text-orange-600 mb-4">Rp 120.000<span class="text-sm text-gray-500">/jam</span></p>
                <button onclick="addToFavorit('Lapangan Basket B')" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 font-semibold mb-2">❤️ Tambah Favorit</button>
                <a href="{{ route('pembayaran') }}" class="block text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>

            <div class="lapangan-card border-2 border-gray-200 rounded-xl p-6 hover:shadow-lg transition" data-nama="lapangan basket c jakarta timur">
                <div class="bg-gradient-to-br from-green-400 to-teal-500 h-48 rounded-lg mb-4 flex items-center justify-center">
                    <span class="text-white text-6xl"></span>
                </div>
                <h4 class="font-bold text-lg mb-2">Lapangan Basket C</h4>
                <p class="text-gray-600 mb-2">📍 Jakarta Timur</p>
                <p class="text-gray-600 mb-4">⭐ 4.9 (156 ulasan)</p>
                <p class="text-2xl font-bold text-orange-600 mb-4">Rp 180.000<span class="text-sm text-gray-500">/jam</span></p>
                <button onclick="addToFavorit('Lapangan Basket C')" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 font-semibold mb-2">❤️ Tambah Favorit</button>
                <a href="{{ route('pembayaran') }}" class="block text-center bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">Booking Sekarang</a>
            </div>
        </div>
    </div>
</div>

<script>
function filterLapangan() {
    const search = document.getElementById('search-input').value.toLowerCase();
    document.querySelectorAll('.lapangan-card').forEach(card => {
        const nama = card.getAttribute('data-nama');
        card.style.display = nama.includes(search) ? 'block' : 'none';
    });
}

function addToFavorit(nama) {
    showNotification('❤️ ' + nama + ' ditambahkan ke favorit!', 'success');
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