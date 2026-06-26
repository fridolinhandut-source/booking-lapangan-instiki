@extends('layout')

@section('title', 'Ulasan')
@section('page_title', 'Ulasan Saya')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
        ✓ {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Buat Ulasan Baru</h3>
        
        <form onsubmit="event.preventDefault(); alert('Ulasan berhasil dikirim!'); this.reset();" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Lapangan</label>
                <select required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Lapangan --</option>
                    <option>Lapangan Basket A - Jakarta Selatan</option>
                    <option>Lapangan Basket B - Jakarta Barat</option>
                    <option>Lapangan Basket C - Jakarta Timur</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <div class="flex gap-2">
                    @for($i = 1; $i <= 5; $i++)
                    <button type="button" onclick="setRating({{ $i }})" class="rating-star text-3xl text-gray-300 hover:text-yellow-400" data-rating="{{ $i }}">★</button>
                    @endfor
                    <input type="hidden" name="rating" id="rating-input" required>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Judul Ulasan</label>
                <input type="text" name="judul" required placeholder="Contoh: Lapangan sangat bagus!" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Isi Ulasan</label>
                <textarea name="isi" required rows="5" placeholder="Ceritakan pengalaman Anda..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">Kirim Ulasan</button>
        </form>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-xl font-bold mb-6 text-gray-900">Ulasan Saya</h3>
        
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-xl p-6">
                <div class="flex justify-between items-start mb-3">
                    <div>
                        <h4 class="font-bold text-lg">Lapangan Basket A</h4>
                        <p class="text-yellow-500">★★★★★</p>
                    </div>
                    <span class="text-sm text-gray-500">20 Juni 2026</span>
                </div>
                <h5 class="font-semibold mb-2">Lapangan sangat bagus!</h5>
                <p class="text-gray-600 mb-4">Lapangan bersih, fasilitas lengkap, dan pelayanannya ramah. Sangat recommended!</p>
                <div class="flex gap-2">
                    <button onclick="alert('Fitur edit ulasan')" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 text-sm">Edit</button>
                    <button onclick="if(confirm('Hapus ulasan ini?')) { alert('Ulasan berhasil dihapus!'); this.closest('.border').remove(); }" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 text-sm">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function setRating(rating) {
    document.getElementById('rating-input').value = rating;
    document.querySelectorAll('.rating-star').forEach((star, index) => {
        star.classList.toggle('text-yellow-400', index < rating);
        star.classList.toggle('text-gray-300', index >= rating);
    });
}
</script>
@endsection