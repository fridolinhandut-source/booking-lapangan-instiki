<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bantuan & FAQ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Pertanyaan yang Sering Diajukan</h3>
                    
                    <div class="space-y-4">
                        <div class="border-b pb-4">
                            <h4 class="font-bold">Bagaimana cara booking lapangan?</h4>
                            <p class="text-gray-600 mt-2">Pilih menu "Cari Lapangan", pilih lapangan yang diinginkan, pilih waktu, dan lakukan pembayaran.</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h4 class="font-bold">Bagaimana cara membatalkan booking?</h4>
                            <p class="text-gray-600 mt-2">Buka menu "Booking Saya", pilih booking yang ingin dibatalkan, dan klik tombol "Batalkan".</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h4 class="font-bold">Metode pembayaran apa saja yang tersedia?</h4>
                            <p class="text-gray-600 mt-2">Kami menerima pembayaran via Transfer Bank, E-Wallet (OVO, DANA, GoPay), dan Kartu Kredit.</p>
                        </div>
                        
                        <div class="border-b pb-4">
                            <h4 class="font-bold">Bagaimana cara menghubungi customer service?</h4>
                            <p class="text-gray-600 mt-2">Anda bisa menghubungi kami via email di support@hoopbook.com atau WhatsApp di 0812-3456-7890.</p>
                        </div>
                    </div>
                    
                    <div class="mt-8 p-4 bg-orange-50 rounded-lg">
                        <h4 class="font-bold text-orange-700">Butuh Bantuan Lebih Lanjut?</h4>
                        <p class="text-gray-600 mt-2">Hubungi kami di:</p>
                        <p class="mt-2">📧 Email: support@hoopbook.com</p>
                        <p> WhatsApp: 0812-3456-7890</p>
                        <p>🕐 Jam Operasional: 08:00 - 22:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>