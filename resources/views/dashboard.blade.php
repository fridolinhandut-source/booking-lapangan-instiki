@extends('layout')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 mb-8 text-white shadow-xl">
        <div class="flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold mb-2">Selamat Datang, {{ auth()->user()->name }}! 👋</h1>
                <p class="text-blue-100">Kelola booking lapangan basket Anda dengan mudah</p>
            </div>
            <div class="hidden md:block">
                <a href="{{ route('cari.lapangan') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-bold hover:bg-blue-50 transition shadow-lg">
                    + Booking Baru
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl border-2 border-gray-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-semibold mb-1">Total Booking</p>
                    <h3 class="text-4xl font-bold text-gray-900">0</h3>
                    <p class="text-xs text-gray-400 mt-2">Bulan ini</p>
                </div>
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border-2 border-gray-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-semibold mb-1">Pendapatan</p>
                    <h3 class="text-4xl font-bold text-gray-900">Rp 0</h3>
                    <p class="text-xs text-gray-400 mt-2">Total transaksi</p>
                </div>
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border-2 border-gray-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-semibold mb-1">Pesanan Baru</p>
                    <h3 class="text-4xl font-bold text-gray-900">0</h3>
                    <p class="text-xs text-gray-400 mt-2">Menunggu konfirmasi</p>
                </div>
                <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border-2 border-gray-100 shadow-sm hover:shadow-xl transition">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-semibold mb-1">Rating Rata-rata</p>
                    <h3 class="text-4xl font-bold text-gray-900">0.0</h3>
                    <p class="text-xs text-gray-400 mt-2">Dari ulasan</p>
                </div>
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Recent Activity -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-gray-900">Aktivitas Terakhir</h3>
                <a href="{{ route('booking.saya') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Lihat Semua →</a>
            </div>
            
            <div class="space-y-4" id="activity-list">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Booking Baru</p>
                            <p class="text-sm text-gray-600">Lapangan Basket A - 25 Juni 2026</p>
                        </div>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-bold">Sukses</span>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Pembayaran Berhasil</p>
                            <p class="text-sm text-gray-600">Rp 150.000 - 20 Juni 2026</p>
                        </div>
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-bold">Berhasil</span>
                </div>
            </div>

            <div id="empty-activity" class="text-center py-12 hidden">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-gray-500 font-semibold">Belum ada aktivitas</p>
                <a href="{{ route('cari.lapangan') }}" class="text-blue-600 hover:text-blue-800 font-semibold mt-2 inline-block">Mulai Booking →</a>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Aksi Cepat</h3>
            
            <div class="space-y-3">
                <a href="{{ route('cari.lapangan') }}" class="block p-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-bold text-lg">Cari Lapangan</p>
                            <p class="text-sm text-blue-100">Temukan lapangan terbaik</p>
                        </div>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </a>

                <a href="{{ route('booking.saya') }}" class="block p-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-xl hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-bold text-lg">Booking Saya</p>
                            <p class="text-sm text-purple-100">Lihat riwayat booking</p>
                        </div>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                </a>

                <a href="{{ route('pembayaran') }}" class="block p-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-bold text-lg">Pembayaran</p>
                            <p class="text-sm text-green-100">Bayar booking Anda</p>
                        </div>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                </a>

                <a href="{{ route('promo') }}" class="block p-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-bold text-lg">Promo</p>
                            <p class="text-sm text-orange-100">Dapatkan diskon menarik</p>
                        </div>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                </a>

                <a href="{{ route('favorit') }}" class="block p-4 bg-gradient-to-r from-pink-500 to-pink-600 text-white rounded-xl hover:shadow-lg transition transform hover:scale-105">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-bold text-lg">Favorit</p>
                            <p class="text-sm text-pink-100">Lapangan favorit Anda</p>
                        </div>
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Upcoming Bookings -->
    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-900">Booking Mendatang</h3>
            <a href="{{ route('kalender') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Lihat Kalender →</a>
        </div>
        
        <div class="space-y-4" id="upcoming-bookings">
            <div class="border-2 border-gray-200 rounded-xl p-6 flex items-center justify-between hover:shadow-lg transition">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-red-500 rounded-xl flex flex-col items-center justify-center text-white">
                        <span class="text-xs font-bold">JUN</span>
                        <span class="text-2xl font-bold">25</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-xl text-gray-900">Lapangan Basket A</h4>
                        <p class="text-gray-600">📍 Jakarta Selatan</p>
                        <p class="text-sm text-gray-500 mt-1">⏰ 10:00 - 11:00 WIB</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <button onclick="editBooking(1)" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 font-semibold">Edit</button>
                    <button onclick="cancelBooking(1)" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 font-semibold">Batal</button>
                </div>
            </div>
        </div>

        <div id="empty-bookings" class="text-center py-12 hidden">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <p class="text-gray-500 font-semibold">Belum ada booking mendatang</p>
            <a href="{{ route('cari.lapangan') }}" class="text-blue-600 hover:text-blue-800 font-semibold mt-2 inline-block">Booking Sekarang →</a>
        </div>
    </div>
</div>

<script>
function editBooking(id) {
    alert('Edit booking #' + id);
}

function cancelBooking(id) {
    if(confirm('Yakin ingin membatalkan booking ini?')) {
        showNotification('Booking berhasil dibatalkan!');
        document.querySelector(`[onclick="cancelBooking(${id})"]`).closest('.border-2').remove();
    }
}

function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-green-100 border-2 border-green-500 text-green-700 px-6 py-4 rounded-lg shadow-lg flex items-center z-50';
    notification.innerHTML = `
        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <p class="font-bold text-lg">${message}</p>
    `;
    document.body.appendChild(notification);
    setTimeout(() => notification.remove(), 3000);
}
</script>
@endsection