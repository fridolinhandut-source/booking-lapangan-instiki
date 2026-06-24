<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kalender Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Kalender Booking Anda</h3>
                    <p class="text-gray-600">Fitur kalender akan menampilkan jadwal booking Anda di sini.</p>
                    
                    <div class="mt-6 p-4 bg-gray-100 rounded">
                        <p class="font-semibold">Contoh Jadwal:</p>
                        <ul class="mt-2 space-y-2">
                            <li>📅 25 Juni 2026 - Giant Arena Court - 14:00-16:00</li>
                            <li> 27 Juni 2026 - Basket Zone - 10:00-12:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>