<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pembayaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-6">Riwayat Pembayaran</h3>
                    
                    <div class="space-y-4">
                        <!-- Pembayaran 1 -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Giant Arena Court</h4>
                                    <p class="text-gray-600 text-sm">📅 25 Juni 2026 - 14:00-16:00 WIB</p>
                                    <p class="text-gray-600 text-sm">Booking ID: #HBK-2026-001</p>
                                </div>
                                <span class="bg-green-100 text-green-800 px-4 py-2 rounded-full font-semibold">
                                    ✓ Lunas
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t">
                                <div>
                                    <p class="text-gray-600 text-sm">Total Pembayaran</p>
                                    <p class="text-2xl font-bold text-orange-600">Rp 300.000</p>
                                </div>
                                <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                                    Download Invoice
                                </button>
                            </div>
                        </div>

                        <!-- Pembayaran 2 -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Basket Zone</h4>
                                    <p class="text-gray-600 text-sm">📅 27 Juni 2026 - 10:00-12:00 WIB</p>
                                    <p class="text-gray-600 text-sm">Booking ID: #HBK-2026-002</p>
                                </div>
                                <span class="bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full font-semibold">
                                    ⏳ Menunggu Pembayaran
                                </span>
                            </div>
                            <div class="flex justify-between items-center pt-4 border-t">
                                <div>
                                    <p class="text-gray-600 text-sm">Total Pembayaran</p>
                                    <p class="text-2xl font-bold text-orange-600">Rp 240.000</p>
                                </div>
                                <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                                    Bayar Sekarang
                                </button>
                            </div>
                        </div>

                        <!-- Pembayaran 3 -->
                        <div class="border rounded-lg p-6 hover:shadow-lg transition">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-lg mb-1">Champion Court</h4>
                                    <p class="text-gray-600 text-sm">📅 15 Juni 2026 - 16:00-18:00 WIB</p>
                                    <p class="text-gray-600 text-sm">Booking ID: #HBK-2026-000</p>
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
                                <button class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 font-semibold">
                                    Download Invoice
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Metode Pembayaran Tersedia -->
                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h4 class="font-bold text-lg mb-4">Metode Pembayaran Tersedia</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div class="bg-white p-4 rounded-lg text-center border">
                                <span class="text-3xl block mb-2">🏦</span>
                                <p class="font-semibold">Transfer Bank</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg text-center border">
                                <span class="text-3xl block mb-2">📱</span>
                                <p class="font-semibold">E-Wallet</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg text-center border">
                                <span class="text-3xl block mb-2">💳</span>
                                <p class="font-semibold">Kartu Kredit</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg text-center border">
                                <span class="text-3xl block mb-2">🏪</span>
                                <p class="font-semibold">Alfamart/Indomaret</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>