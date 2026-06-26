@extends('layout')

@section('title', 'Pembayaran')
@section('page_title', 'Pembayaran')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Payment Methods -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
                <h3 class="text-xl font-bold mb-6">Pilih Metode Pembayaran</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="border-2 border-orange-500 rounded-xl p-4 text-center cursor-pointer bg-orange-50">
                        <div class="text-3xl mb-2">🏦</div>
                        <div class="font-semibold">BCA</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-blue-500">
                        <div class="text-3xl mb-2">🏦</div>
                        <div class="font-semibold">Mandiri</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-red-500">
                        <div class="text-3xl mb-2">🏦</div>
                        <div class="font-semibold">BNI</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-green-500">
                        <div class="text-3xl mb-2">💚</div>
                        <div class="font-semibold">GoPay</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-purple-500">
                        <div class="text-3xl mb-2">💜</div>
                        <div class="font-semibold">OVO</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-blue-500">
                        <div class="text-3xl mb-2">💙</div>
                        <div class="font-semibold">DANA</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-indigo-500">
                        <div class="text-3xl mb-2">📱</div>
                        <div class="font-semibold">QRIS</div>
                    </div>
                    <div class="border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-pink-500">
                        <div class="text-3xl mb-2">💳</div>
                        <div class="font-semibold">Kartu</div>
                    </div>
                </div>
            </div>

            <!-- Payment Details -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-xl font-bold mb-6">Detail Pembayaran</h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Lapangan</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                            <option>INSTIKI - Denpasar, Panjer</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pemesan</label>
                        <input type="text" value="{{ auth()->user()->name }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Booking</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Jam</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500">
                            <option>08:00 - 09:00</option>
                            <option>09:00 - 10:00</option>
                            <option>10:00 - 11:00</option>
                        </select>
                    </div>

                    <div class="border-t pt-4 mt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-semibold">Total Pembayaran</span>
                            <span class="text-2xl font-bold text-orange-600">Rp 150.000</span>
                        </div>
                    </div>

                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white font-semibold py-3 rounded-lg hover:shadow-lg transition duration-200">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>

        <!-- Transaction History -->
        <div>
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-xl font-bold mb-6">Riwayat Transaksi</h3>
                
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-semibold">INSTIKI - Denpasar, Panjer</p>
                                <p class="text-sm text-gray-500">25/6/2026, 13:59:38</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Berhasil</span>
                        </div>
                        <p class="text-orange-600 font-bold">Rp 1.000</p>
                    </div>

                    <div class="border-b pb-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-semibold">INSTIKI - Denpasar, Panjer</p>
                                <p class="text-sm text-gray-500">25/6/2026, 13:37:40</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Berhasil</span>
                        </div>
                        <p class="text-orange-600 font-bold">Rp 500.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection