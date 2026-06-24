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
                    <h3 class="text-lg font-bold mb-4">Ulasan yang Pernah Anda Berikan</h3>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <div class="flex justify-between">
                                <h4 class="font-bold">Giant Arena Court</h4>
                                <span class="text-yellow-500">⭐⭐⭐⭐⭐</span>
                            </div>
                            <p class="text-gray-600 mt-2">"Lapangan sangat bagus dan terawat. Recommended!"</p>
                            <p class="text-sm text-gray-400 mt-2">20 Juni 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>