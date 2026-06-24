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
                    <h3 class="text-lg font-bold mb-6">Lapangan Favorit Anda</h3>
                    
                    @if(isset($favorits) && $favorits->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($favorits as $favorit)
                            <div class="border rounded-lg overflow-hidden hover:shadow-xl transition">
                                <div class="h-40 bg-gradient-to-br from-orange-400 to-red-500 flex items-center justify-center">
                                    <span class="text-6xl">🏀</span>
                                </div>
                                <div class="p-4">
                                    <h4 class="font-bold text-lg mb-2">{{ $favorit->name }}</h4>
                                    <p class="text-gray-600 text-sm mb-2">📍 {{ $favorit->location }}</p>
                                    <p class="text-orange-600 font-bold mb-3">Rp {{ number_format($favorit->price, 0, ',', '.') }}/jam</p>
                                    
                                    <div class="flex gap-2">
                                        <a href="{{ route('booking') }}" class="flex-1 bg-orange-500 text-white text-center px-4 py-2 rounded hover:bg-orange-600 text-sm">
                                            Booking
                                        </a>
                                        <button class="bg-red-100 text-red-600 px-4 py-2 rounded hover:bg-red-200 text-sm">
                                            ❤️ Hapus
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12">
                            <span class="text-6xl block mb-4">❤️</span>
                            <h4 class="text-xl font-semibold text-gray-700 mb-2">Belum Ada Lapangan Favorit</h4>
                            <p class="text-gray-500 mb-6">Tambahkan lapangan favorit Anda untuk akses cepat</p>
                            <a href="{{ route('cari.lapangan') }}" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 font-semibold">
                                Cari Lapangan
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>