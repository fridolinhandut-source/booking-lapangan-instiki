<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        body { font-size: 16px; }
    </style>
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    
    <main class="flex-1 ml-72 p-10">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-4xl font-extrabold text-gray-900">Dashboard</h1>
                <p class="text-lg text-gray-500 mt-2">Selamat datang kembali, {{ Auth::user()->name ?? 'User' }}! 👋</p>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                    {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="bg-gradient-to-r from-[#0b1e3d] to-[#162d50] rounded-3xl p-10 mb-8 flex items-center justify-between relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 w-80 h-80 bg-orange-500/20 rounded-full blur-3xl -mr-20 -mt-20"></div>
            <div class="relative z-10 max-w-lg">
                <h2 class="text-5xl font-extrabold text-white leading-tight mb-4">
                    Booking Lapangan jadi <span class="text-orange-400">lebih mudah</span>
                </h2>
                <p class="text-lg text-slate-300 mb-6">Temukan dan booking lapangan terbaik di kampus INSTIKI</p>
                <a href="{{ route('cari.lapangan') }}" class="inline-block bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-2xl transition-all transform hover:scale-105">
                    <i class="fa-solid fa-magnifying-glass mr-2"></i> Cari Lapangan
                </a>
            </div>
            <div class="relative z-10">
                <div class="w-40 h-40 bg-gradient-to-br from-orange-400 to-red-500 rounded-full flex items-center justify-center shadow-2xl animate-pulse">
                    <i class="fa-solid fa-basketball text-white text-7xl"></i>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div class="lg:col-span-2 bg-white rounded-3xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Booking Mendatang</h3>
                <div class="flex items-center gap-6 p-6 bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl border-2 border-orange-200">
                    <div class="w-24 h-24 bg-gradient-to-br from-orange-400 to-red-500 rounded-2xl flex items-center justify-center shadow-lg">
                        <i class="fa-solid fa-basketball text-white text-4xl"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-bold text-2xl text-gray-900">INSTIKI Court</h4>
                        <p class="text-base text-gray-600 mt-1"><i class="fa-solid fa-location-dot mr-2 text-orange-500"></i>Denpasar, Panjer</p>
                        <div class="flex gap-3 mt-3">
                            <span class="bg-white px-4 py-2 rounded-xl text-sm font-semibold text-gray-700 shadow">
                                <i class="fa-regular fa-calendar mr-2 text-orange-500"></i>Sab, 25 Mei 2024
                            </span>
                            <span class="bg-white px-4 py-2 rounded-xl text-sm font-semibold text-gray-700 shadow">
                                <i class="fa-regular fa-clock mr-2 text-orange-500"></i>16:00 - 18:00
                            </span>
                        </div>
                    </div>
                    <span class="bg-green-500 text-white px-5 py-2 rounded-full text-sm font-bold shadow-lg">✓ Dikonfirmasi</span>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-lg">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Ringkasan</h3>
                <div class="space-y-5">
                    <div class="flex justify-between items-center pb-4 border-b-2 border-gray-100">
                        <span class="text-base text-gray-600 font-medium">Total Booking</span>
                        <span class="text-3xl font-extrabold text-gray-900">12</span>
                    </div>
                    <div class="flex justify-between items-center pb-4 border-b-2 border-gray-100">
                        <span class="text-base text-gray-600 font-medium">Selesai</span>
                        <span class="text-3xl font-extrabold text-green-500">10</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-base text-gray-600 font-medium">Dibatalkan</span>
                        <span class="text-3xl font-extrabold text-red-500">2</span>
                    </div>
                    <div class="pt-4 border-t-2 border-gray-100">
                        <span class="text-base text-gray-600 font-medium block mb-2">Total Pengeluaran</span>
                        <span class="text-4xl font-extrabold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">Rp 2.450.000</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rekomendasi -->
        <div>
            <div class="flex justify-between items-end mb-6">
                <div>
                    <h3 class="text-3xl font-extrabold text-gray-900">Rekomendasi Lapangan</h3>
                    <p class="text-base text-gray-500 mt-2">Lapangan terbaik di kampus INSTIKI</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-gradient-to-br from-orange-400 to-red-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-basketball text-white text-9xl opacity-40"></i>
                        </div>
                        <span class="absolute top-4 left-4 bg-white text-orange-500 px-4 py-2 rounded-full text-sm font-bold shadow-lg">⭐ 4.8</span>
                        <span class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Tersedia</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-extrabold text-2xl text-gray-900 mb-2">INSTIKI Court</h4>
                        <p class="text-base text-gray-500 mb-4"><i class="fa-solid fa-location-dot mr-2 text-orange-500"></i>Denpasar, Panjer</p>
                        <div class="flex gap-2 mb-5">
                            <span class="px-4 py-2 bg-orange-100 text-orange-600 rounded-xl text-sm font-semibold">Indoor</span>
                            <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-xl text-sm font-semibold">AC</span>
                            <span class="px-4 py-2 bg-green-100 text-green-600 rounded-xl text-sm font-semibold">Parkir</span>
                        </div>
                        <div class="flex justify-between items-center pt-5 border-t-2 border-gray-100">
                            <div>
                                <p class="text-sm text-gray-500">Mulai dari</p>
                                <p class="text-2xl font-extrabold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">Rp 250.000<span class="text-sm text-gray-400 font-normal">/jam</span></p>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-xl font-bold hover:shadow-lg transition-all">Booking</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-gradient-to-br from-blue-400 to-indigo-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-basketball text-white text-9xl opacity-40"></i>
                        </div>
                        <span class="absolute top-4 left-4 bg-white text-blue-500 px-4 py-2 rounded-full text-sm font-bold shadow-lg">⭐ 4.9</span>
                        <span class="absolute top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Tersedia</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-extrabold text-2xl text-gray-900 mb-2">INSTIKI Arena 2</h4>
                        <p class="text-base text-gray-500 mb-4"><i class="fa-solid fa-location-dot mr-2 text-orange-500"></i>Denpasar, Panjer</p>
                        <div class="flex gap-2 mb-5">
                            <span class="px-4 py-2 bg-purple-100 text-purple-600 rounded-xl text-sm font-semibold">Premium</span>
                            <span class="px-4 py-2 bg-yellow-100 text-yellow-600 rounded-xl text-sm font-semibold">Lampu</span>
                        </div>
                        <div class="flex justify-between items-center pt-5 border-t-2 border-gray-100">
                            <div>
                                <p class="text-sm text-gray-500">Mulai dari</p>
                                <p class="text-2xl font-extrabold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">Rp 300.000<span class="text-sm text-gray-400 font-normal">/jam</span></p>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-xl font-bold hover:shadow-lg transition-all">Booking</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-gradient-to-br from-green-400 to-emerald-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <i class="fa-solid fa-trophy text-white text-9xl opacity-40"></i>
                        </div>
                        <span class="absolute top-4 left-4 bg-white text-green-500 px-4 py-2 rounded-full text-sm font-bold shadow-lg">⭐ 5.0</span>
                        <span class="absolute top-4 right-4 bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Populer</span>
                    </div>
                    <div class="p-6">
                        <h4 class="font-extrabold text-2xl text-gray-900 mb-2">INSTIKI Pro Court</h4>
                        <p class="text-base text-gray-500 mb-4"><i class="fa-solid fa-location-dot mr-2 text-orange-500"></i>Denpasar, Panjer</p>
                        <div class="flex gap-2 mb-5">
                            <span class="px-4 py-2 bg-red-100 text-red-600 rounded-xl text-sm font-semibold">VIP</span>
                            <span class="px-4 py-2 bg-indigo-100 text-indigo-600 rounded-xl text-sm font-semibold">Sound</span>
                        </div>
                        <div class="flex justify-between items-center pt-5 border-t-2 border-gray-100">
                            <div>
                                <p class="text-sm text-gray-500">Mulai dari</p>
                                <p class="text-2xl font-extrabold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">Rp 350.000<span class="text-sm text-gray-400 font-normal">/jam</span></p>
                            </div>
                            <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-xl font-bold hover:shadow-lg transition-all">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>