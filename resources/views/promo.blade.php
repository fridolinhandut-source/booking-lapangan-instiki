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
                    <h3 class="text-lg font-bold mb-4">Promo Tersedia</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gradient-to-r from-orange-400 to-red-500 text-white p-6 rounded-lg">
                            <h4 class="text-xl font-bold">Diskon 20%</h4>
                            <p class="mt-2">Untuk booking pertama kali</p>
                            <p class="mt-4 text-sm">Kode: NEWUSER20</p>
                        </div>
                        
                        <div class="bg-gradient-to-r from-blue-400 to-purple-500 text-white p-6 rounded-lg">
                            <h4 class="text-xl font-bold">Cashback 10%</h4>
                            <p class="mt-2">Setiap booking di weekend</p>
                            <p class="mt-4 text-sm">Kode: WEEKEND10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>