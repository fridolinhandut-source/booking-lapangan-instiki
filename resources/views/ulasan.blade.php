<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ulasan Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-6">Ulasan yang Pernah Anda Berikan</h3>
                    
                    <div class="space-y-6">
                        <!-- Ulasan 1 -->
                        <div class="border rounded-lg p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Giant Arena Court</h4>
                                    <p class="text-gray-600">📅 Booking tanggal 15 Juni 2026</p>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-yellow-500 text-2xl">⭐⭐⭐⭐⭐</span>
                                    <span class="ml-2 text-gray-600">(5.0)</span>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-4">
                                "Lapangan sangat bagus dan terawat! Fasilitas lengkap, parkiran luas, dan staff ramah. 
                                Sangat recommended untuk bermain basket bersama teman-teman. Akan booking lagi!"
                            </p>
                            <p class="text-sm text-gray-500">Diposting pada 16 Juni 2026</p>
                        </div>

                        <!-- Ulasan 2 -->
                        <div class="border rounded-lg p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Basket Zone</h4>
                                    <p class="text-gray-600">📅 Booking tanggal 10 Mei 2026</p>
                                </div>
                                <div class="flex items-center">
                                    <span class="text-yellow-500 text-2xl">⭐⭐⭐⭐</span>
                                    <span class="ml-2 text-gray-600">(4.0)</span>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-4">
                                "Lapangan outdoor yang cukup bagus. Hanya saja agak panas di siang hari. 
                                Harga terjangkau dan lokasi strategis. Overall puas!"
                            </p>
                            <p class="text-sm text-gray-500">Diposting pada 11 Mei 2026</p>
                        </div>
                    </div>

                    <!-- Ulasan yang Bisa Diberikan -->
                    <div class="mt-8">
                        <h4 class="font-bold text-xl mb-4">Booking yang Belum Diulas</h4>
                        
                        <div class="border rounded-lg p-6 bg-gray-50">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-xl mb-2">Champion Court</h4>
                                    <p class="text-gray-600">📅 Booking tanggal 25 Juni 2026</p>
                                    <p class="text-green-600 font-semibold mt-2">✓ Selesai</p>
                                </div>
                            </div>
                            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                                Tulis Ulasan
                            </button>
                        </div>
                    </div>

                    <!-- Form Ulasan (Hidden by default, shown when clicking "Tulis Ulasan") -->
                    <div class="mt-6 border rounded-lg p-6 hidden" id="form-ulasan">
                        <h4 class="font-bold text-lg mb-4">Tulis Ulasan Anda</h4>
                        
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                                <div class="flex gap-2 text-3xl">
                                    <button type="button" class="text-gray-300 hover:text-yellow-500">⭐</button>
                                    <button type="button" class="text-gray-300 hover:text-yellow-500">⭐</button>
                                    <button type="button" class="text-gray-300 hover:text-yellow-500">⭐</button>
                                    <button type="button" class="text-gray-300 hover:text-yellow-500">⭐</button>
                                    <button type="button" class="text-gray-300 hover:text-yellow-500">⭐</button>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Ulasan Anda</label>
                                <textarea rows="4" 
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500"
                                          placeholder="Ceritakan pengalaman Anda..."></textarea>
                            </div>
                            
                            <div class="flex gap-4">
                                <button type="submit" class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 font-semibold">
                                    Kirim Ulasan
                                </button>
                                <button type="button" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-400 font-semibold">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>