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
                    <h3 class="text-lg font-bold mb-4">Daftar Lapangan Tersedia</h3>
                    
                    @if($lapangan->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach($lapangan as $field)
                                <div class="border rounded-lg p-4 hover:shadow-lg transition">
                                    <h4 class="font-bold text-lg">{{ $field->name }}</h4>
                                    <p class="text-gray-600">{{ $field->location }}</p>
                                    <p class="text-orange-500 font-bold mt-2">Rp {{ number_format($field->price, 0, ',', '.') }}/jam</p>
                                    <button class="mt-3 bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">
                                        Booking Sekarang
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500">Belum ada lapangan yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>