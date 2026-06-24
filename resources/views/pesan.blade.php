<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-6">Daftar Booking Anda</h3>
                    
                    <!-- Tab Filter -->
                    <div class="flex gap-4 mb-6 border-b">
                        <button class="px-4 py-2 border-b-2 border-orange-500 text-orange-600 font-semibold">
                            Semua Booking
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:text-orange-600">
                            Aktif
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:text-orange-600">
                            Selesai
                        </button>
                        <button class="px-4 py-2 text-gray-600 hover:text-orange-600">
                            Dibatalkan
                        </button>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Booking 1 -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Giant Arena Court</h4>
                                    <p class="text-gray-600">📍 Jakarta Selatan</p>
                                    <p class="text-gray-600 mt-2">📅 Sabtu, 25 Juni 2026</p>
                                    <p class="text-gray-600">⏰ 14:00 - 16:00 WIB (2 jam)</p>
                                    <p class="text-gray-600">👤 Atas nama: {{ Auth::user()->name }}</p>
                                </div>
                                <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full font-semibold">
                                    ✓ Dikonfirmasi
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t">
                                <div>
                                    <p class="text-gray-600 text-sm">Total Pembayaran</p>
                                    <p class="text-2xl font-bold text-orange-600">Rp 300.000</p>
                                </div>
                                <div class="flex gap-2">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 font-semibold">
                                        Detail
                                    </button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 font-semibold">
                                        Batalkan
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Booking 2 -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Basket Zone</h4>
                                    <p class="text-gray-600">📍 Jakarta Pusat</p>
                                    <p class="text-gray-600 mt-2">📅 Minggu, 27 Juni 2026</p>
                                    <p class="text-gray-600">⏰ 10:00 - 12:00 WIB (2 jam)</p>
                                    <p class="text-gray-600">👤 Atas nama: {{ Auth::user()->name }}</p>
                                </div>
                                <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full font-semibold">
                                    ⏳ Menunggu Konfirmasi
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t">
                                <div>
                                    <p class="text-gray-600 text-sm">Total Pembayaran</p>
                                    <p class="text-2xl font-bold text-orange-600">Rp 240.000</p>
                                </div>
                                <div class="flex gap-2">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 font-semibold">
                                        Detail
                                    </button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 font-semibold">
                                        Batalkan
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Booking 3 (Selesai) -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition opacity-75">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Champion Court</h4>
                                    <p class="text-gray-600">📍 Jakarta Barat</p>
                                    <p class="text-gray-600 mt-2">📅 Minggu, 15 Juni 2026</p>
                                    <p class="text-gray-600">⏰ 16:00 - 18:00 WIB (2 jam)</p>
                                    <p class="text-gray-600">👤 Atas nama: {{ Auth::user()->name }}</p>
                                </div>
                                <span class="bg-gray-100 text-gray-800 px-4 py-2 rounded-full font-semibold">
                                    Selesai
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t">
                                <div>
                                    <p class="text-gray-600 text-sm">Total Pembayaran</p>
                                    <p class="text-2xl font-bold text-orange-600">Rp 360.000</p>
                                </div>
                                <div class="flex gap-2">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 font-semibold">
                                        Detail
                                    </button>
                                    <a href="{{ route('ulasan') }}" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                                        Beri Ulasan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>