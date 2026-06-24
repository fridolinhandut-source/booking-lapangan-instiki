<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cari Lapangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Konten Cari Lapangan Kamu Di Sini -->
                    <h3 class="text-lg font-bold mb-4">Daftar Lapangan Tersedia</h3>
                    <p>Fitur pencarian lapangan akan ditampilkan di sini.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>