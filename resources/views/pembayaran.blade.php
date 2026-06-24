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
                    <h3 class="text-lg font-bold mb-4">Riwayat Pembayaran</h3>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-semibold">Giant Arena Court</p>
                                    <p class="text-sm text-gray-600">25 Juni 2026 - 14:00-16:00</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-orange-500">Rp 200.000</p>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Lunas</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-b pb-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="font-semibold">Basket Zone</p>
                                    <p class="text-sm text-gray-600">27 Juni 2026 - 10:00-12:00</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-bold text-orange-500">Rp 250.000</p>
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Menunggu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>