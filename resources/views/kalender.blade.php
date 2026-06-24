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
                    <h3 class="text-lg font-bold mb-6">Kalender Booking Anda</h3>
                    
                    <!-- Calendar Container -->
                    <div class="bg-gray-50 rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <button class="text-gray-600 hover:text-orange-600 font-semibold">
                                ← Bulan Sebelumnya
                            </button>
                            <h4 class="text-xl font-bold text-gray-800">Juni 2026</h4>
                            <button class="text-gray-600 hover:text-orange-600 font-semibold">
                                Bulan Selanjutnya →
                            </button>
                        </div>
                        
                        <!-- Calendar Grid -->
                        <div class="grid grid-cols-7 gap-2 text-center">
                            <div class="font-semibold text-gray-600 py-2">Min</div>
                            <div class="font-semibold text-gray-600 py-2">Sen</div>
                            <div class="font-semibold text-gray-600 py-2">Sel</div>
                            <div class="font-semibold text-gray-600 py-2">Rab</div>
                            <div class="font-semibold text-gray-600 py-2">Kam</div>
                            <div class="font-semibold text-gray-600 py-2">Jum</div>
                            <div class="font-semibold text-gray-600 py-2">Sab</div>
                            
                            <!-- Calendar Days -->
                            @for($i = 1; $i <= 30; $i++)
                                <div class="bg-white p-3 rounded border {{ in_array($i, [25, 27]) ? 'border-orange-500 bg-orange-50' : '' }}">
                                    <span class="font-semibold {{ in_array($i, [25, 27]) ? 'text-orange-600' : 'text-gray-700' }}">
                                        {{ $i }}
                                    </span>
                                    @if(in_array($i, [25]))
                                        <div class="text-xs text-orange-600 mt-1">Booking</div>
                                    @endif
                                </div>
                            @endfor
                        </div>
                    </div>
                    
                    <!-- Legend -->
                    <div class="flex items-center gap-6 text-sm">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-orange-500 rounded"></div>
                            <span>Ada Booking</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-green-500 rounded"></div>
                            <span>Selesai</span>
                        </div>
                        <div class="flex items-center gap-