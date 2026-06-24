<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Promo & Diskon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-6">Promo Spesial Bulan Ini</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Promo 1 -->
                        <div class="bg-gradient-to-r from-orange-400 to-red-500 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-white text-orange-600 px-4 py-1 rounded-full font-bold text-sm">
                                    POPULER
                                </span>
                                <span class="text-4xl">🎉</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-2">Diskon 20% Booking Pertama</h4>
                            <p class="mb-4">Khusus untuk pengguna baru! Dapatkan diskon 20% untuk booking pertama Anda.</p>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <p class="text-sm mb-1">Kode Promo:</p>
                                <p class="text-2xl font-bold tracking-wider">NEWUSER20</p>
                            </div>
                            <p class="text-sm opacity-90">Berlaku sampai 30 Juni 2026</p>
                        </div>

                        <!-- Promo 2 -->
                        <div class="bg-gradient-to-r from-blue-400 to-purple-500 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-white text-blue-600 px-4 py-1 rounded-full font-bold text-sm">
                                    WEEKEND
                                </span>
                                <span class="text-4xl">🎁</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-2">Cashback 10% Weekend</h4>
                            <p class="mb-4">Booking di hari Sabtu atau Minggu, dapatkan cashback 10% untuk booking berikutnya.</p>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <p class="text-sm mb-1">Kode Promo:</p>
                                <p class="text-2xl font-bold tracking-wider">WEEKEND10</p>
                            </div>
                            <p class="text-sm opacity-90">Setiap hari Sabtu & Minggu</p>
                        </div>

                        <!-- Promo 3 -->
                        <div class="bg-gradient-to-r from-green-400 to-teal-500 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-white text-green-600 px-4 py-1 rounded-full font-bold text-sm">
                                    HEMAT
                                </span>
                                <span class="text-4xl">💰</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-2">Booking 3x Gratis 1x</h4>
                            <p class="mb-4">Booking 3 kali dalam sebulan, dapatkan 1 jam gratis untuk booking ke-4!</p>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <p class="text-sm mb-1">Kode Promo:</p>
                                <p class="text-2xl font-bold tracking-wider">LOYAL3GET1</p>
                            </div>
                            <p class="text-sm opacity-90">Minimal booking 2 jam per transaksi</p>
                        </div>

                        <!-- Promo 4 -->
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-8 rounded-lg shadow-lg hover:shadow-xl transition transform hover:scale-105">
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-white text-yellow-600 px-4 py-1 rounded-full font-bold text-sm">
                                    GROUP
                                </span>
                                <span class="text-4xl">👥</span>
                            </div>
                            <h4 class="text-2xl font-bold mb-2">Diskon Group 15%</h4>
                            <p class="mb-4">Booking untuk 10 orang atau lebih? Dapatkan diskon 15% untuk semua lapangan!</p>
                            <div class="bg-white bg-opacity-20 p-4 rounded-lg mb-4">
                                <p class="text-sm mb-1">Kode Promo:</p>
                                <p class="text-2xl font-bold tracking-wider">GROUP15</p>
                            </div>
                            <p class="text-sm opacity-90">Minimal 10 pemain, maksimal 20 pemain</p>
                        </div>
                    </div>

                    <!-- Cara Menggunakan Promo -->
                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h4 class="font-bold text-xl mb-4">Cara Menggunakan Kode Promo</h4>
                        <ol class="space-y-3">
                            <li class="flex items-start">
                                <span class="bg-orange-500 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0">1</span>
                                <span>Pilih lapangan dan waktu booking yang diinginkan</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-orange-500 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0">2</span>
                                <span>Pada halaman pembayaran, masukkan kode promo di kolom yang tersedia</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-orange-500 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0">3</span>
                                <span>Klik "Terapkan" untuk melihat diskon yang didapat</span>
                            </li>
                            <li class="flex items-start">
                                <span class="bg-orange-500 text-white w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0">4</span>
                                <span>Lanjutkan pembayaran dengan harga yang sudah didiskon</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>