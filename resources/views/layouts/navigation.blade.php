<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('cari.lapangan')" :active="request()->routeIs('cari.lapangan')">
                        {{ __('Cari Lapangan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('booking.saya')" :active="request()->routeIs('booking.saya')">
                        {{ __('Booking Saya') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('kalender')" :active="request()->routeIs('kalender')">
                        {{ __('Kalender') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('pembayaran')" :active="request()->routeIs('pembayaran')">
                        {{ __('Pembayaran') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('promo')" :active="request()->routeIs('promo')">
                        {{ __('Promo') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('favorit')" :active="request()->routeIs('favorit')">
                        {{ __('Favorit') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('ulasan')" :active="request()->routeIs('ulasan')">
                        {{ __('Ulasan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('pesan')" :active="request()->routeIs('pesan')">
                        {{ __('Pesan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('pengaturan')" :active="request()->routeIs('pengaturan')">
                        {{ __('Pengaturan') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('bantuan')" :active="request()->routeIs('bantuan')">
                        {{ __('Bantuan') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>