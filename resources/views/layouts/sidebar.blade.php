<aside class="w-72 bg-gradient-to-b from-[#0b1e3d] to-[#162d50] text-white fixed left-0 top-0 bottom-0 flex flex-col z-50 shadow-2xl">
    
   <!-- LOGO -->
<div class="px-6 py-8 border-b border-slate-700/50 flex flex-col items-center text-center bg-white rounded-t-3xl">
    <div class="w-full bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 mb-4 shadow-lg">
        <img src="{{ asset('images/instiki.png') }}" alt="INSTIKI" class="w-40 h-auto object-contain mx-auto drop-shadow-xl">
    </div>
    <h2 class="text-base font-extrabold text-gray-800 tracking-wider uppercase">Sistem Booking Lapangan</h2>
    <p class="text-xs text-gray-500 mt-1 font-medium">Institut Bisnis dan Teknologi Indonesia</p>
</div>

    <!-- MENU -->
    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-house w-6 text-center text-lg"></i> Dashboard
        </a>
        <a href="{{ route('cari.lapangan') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('cari.lapangan') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-magnifying-glass w-6 text-center text-lg"></i> Cari Lapangan
        </a>
        <a href="{{ route('booking.saya') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('booking.saya') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-calendar-check w-6 text-center text-lg"></i> Booking Saya
        </a>
        <a href="{{ route('kalender') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('kalender') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-calendar w-6 text-center text-lg"></i> Kalender
        </a>
        <a href="{{ route('pembayaran') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('pembayaran') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-credit-card w-6 text-center text-lg"></i> Pembayaran
        </a>
        <a href="{{ route('promo') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('promo') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-tag w-6 text-center text-lg"></i> Promo
        </a>
        <a href="{{ route('favorit') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('favorit') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-heart w-6 text-center text-lg"></i> Favorit
        </a>
        <a href="{{ route('ulasan') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('ulasan') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-star w-6 text-center text-lg"></i> Ulasan
        </a>
        <a href="{{ route('pesan') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('pesan') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-envelope w-6 text-center text-lg"></i> Pesan
        </a>
        <a href="{{ route('pengaturan') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('pengaturan') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-gear w-6 text-center text-lg"></i> Pengaturan
        </a>
        <a href="{{ route('bantuan') }}" class="flex items-center gap-4 px-5 py-3.5 {{ request()->routeIs('bantuan') ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-lg' : 'text-slate-300 hover:bg-white/10' }} rounded-xl font-semibold text-[15px] transition-all">
            <i class="fa-solid fa-circle-question w-6 text-center text-lg"></i> Bantuan
        </a>
    </nav>

    <!-- LOGOUT -->
    <div class="p-4 border-t border-slate-700/50">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center gap-4 px-5 py-3.5 text-red-400 hover:bg-red-500/10 rounded-xl font-semibold text-[15px] transition-all">
                <i class="fa-solid fa-right-from-bracket w-6 text-center text-lg"></i> Log Out
            </button>
        </form>
    </div>
</aside>