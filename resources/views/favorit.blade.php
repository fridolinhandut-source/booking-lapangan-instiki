<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lapangan Favorit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Lapangan Favorit Anda</h3>
                    
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4 flex justify-between items-center">
                            <div>
                                <h4 class="font-bold">Giant Arena Court</h4>
                                <p class="text-sm text-gray-600">Jakarta Selatan</p>
                            </div>
                            <button class="text-red-500 hover:text-red-700">
                                ❤️ Hapus dari Favorit
                            </button>
                        </div>
                        
                        <div class="border rounded-lg p-4 flex justify-between items-center">
                            <div>
                                <h4 class="font-bold">Basket Zone</h4>
                                <p class="text-sm text-gray-600">Jakarta Pusat</p>
                            </div>
                            <button class="text-red-500 hover:text-red-700">
                                ❤️ Hapus dari Favorit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>