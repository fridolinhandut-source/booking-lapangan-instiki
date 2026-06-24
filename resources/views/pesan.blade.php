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
                    <h3 class="text-lg font-bold mb-4">Daftar Booking Anda</h3>
                    
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="font-bold text-lg">Giant Arena Court</h4>
                                    <p class="text-gray-600">Jakarta Selatan</p>
                                    <p class="text-sm text-gray-500 mt-2">📅 25 Juni 2026, 14:00-16:00</p>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">Dikonfirmasi</span>
                            </div>
                            <div class="mt-4 flex gap-2">
                                <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Detail</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>