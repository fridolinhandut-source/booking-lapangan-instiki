<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HoopBook') }} - {{ $title ?? 'Booking Lapangan Basket' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Sidebar Navigation -->
        <aside class="fixed inset-y-0 left-0 w-64 bg-slate-900 text-white overflow-y-auto">
            <!-- Logo -->
            <div class="p-6 border-b border-slate-700">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                    <span class="text-4xl">🏀</span>
                    <div>
                        <h1 class="text-2xl font-bold text-orange-500">HoopBook</h1>
                        <p class="text-xs text-gray-400">Booking Lapangan Basket</p>
                    </div>
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav class="mt-6 px-3 space-y-2">
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('dashboard') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>📊</span>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('cari.lapangan') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('cari.lapangan') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>🔍</span>
                    <span>Cari Lapangan</span>
                </a>

                <a href="{{ route('pesan') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('pesan') || request()->routeIs('booking.saya') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>📅</span>
                    <span>Booking Saya</span>
                </a>

                <a href="{{ route('kalender') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('kalender') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>📆</span>
                    <span>Kalender</span>
                </a>

                <a href="{{ route('pembayaran') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('pembayaran') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>💳</span>
                    <span>Pembayaran</span>
                </a>

                <a href="{{ route('promo') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('promo') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>🎁</span>
                    <span>Promo</span>
                </a>

                <a href="{{ route('favorit') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('favorit') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>❤️</span>
                    <span>Favorit</span>
                </a>

                <a href="{{ route('ulasan') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('ulasan') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>⭐</span>
                    <span>Ulasan</span>
                </a>

                <a href="{{ route('pengaturan') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('pengaturan') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>⚙️</span>
                    <span>Pengaturan</span>
                </a>

                <a href="{{ route('bantuan') }}" 
                   class="flex items-center gap-3 px-4 py-3 rounded-lg transition {{ request()->routeIs('bantuan') ? 'bg-orange-500 text-white' : 'text-gray-300 hover:bg-slate-800' }}">
                    <span>❓</span>
                    <span>Bantuan</span>
                </a>
            </nav>

            <!-- Logout Button -->
            <div class="absolute bottom-0 left-0 right-0 p-3 border-t border-slate-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="w-full flex items-center gap-3 px-4 py-3 rounded-lg transition text-red-400 hover:bg-red-900 hover:text-white">
                        <span>🚪</span>
                        <span>Log Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="pl-64">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm">
                <div class="px-6 py-4 flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-800">{{ $header ?? 'Dashboard' }}</h2>
                    <div class="flex items-center gap-4">
                        <div class="text-right">
                            <p class="font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>