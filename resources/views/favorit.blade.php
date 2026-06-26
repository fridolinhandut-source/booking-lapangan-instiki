<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Favorit - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Lapangan Favorit</h1>
            <button onclick="openAddFavorite()" class="px-6 py-3 bg-orange-500 text-white rounded-xl hover:bg-orange-600">
                <i class="fa-solid fa-plus mr-2"></i>Tambah Lapangan
            </button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="favoriteGrid"></div>

        <div id="emptyState" class="hidden text-center py-16">
            <i class="fa-regular fa-heart text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Favorit</h3>
            <p class="text-gray-500">Tambahkan lapangan favorit Anda</p>
        </div>
    </main>
</div>

<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl p-6 max-w-md w-full">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Tambah Lapangan Favorit</h3>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lapangan</label>
                <input type="text" id="favName" value="INSTIKI" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
                <input type="text" id="favLocation" value="Denpasar, Panjer" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Harga/Jam</label>
                <input type="number" id="favPrice" value="250000" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
        </div>
        <div class="flex gap-3 mt-6">
            <button onclick="closeAddModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg">Batal</button>
            <button onclick="saveFavorite()" class="flex-1 px-4 py-2 bg-orange-500 text-white rounded-lg">Simpan</button>
        </div>
    </div>
</div>

<div id="toast" class="hidden fixed top-4 right-4 z-50 px-6 py-4 rounded-xl shadow-lg bg-green-500 text-white">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i id="toastIcon" class="fa-solid fa-check text-xl"></i></div>
        <div><h4 id="toastTitle" class="font-bold">Berhasil!</h4><p id="toastMessage" class="text-sm"></p></div>
    </div>
</div>

<script>
let favorites = JSON.parse(localStorage.getItem('favorites')) || [{id: 1, name: 'INSTIKI', location: 'Denpasar, Panjer', price: 250000, rating: 4.8}];

function renderFavorites() {
    const grid = document.getElementById('favoriteGrid');
    const empty = document.getElementById('emptyState');
    
    if (favorites.length === 0) {
        grid.innerHTML = '';
        empty.classList.remove('hidden');
        return;
    }
    
    empty.classList.add('hidden');
    grid.innerHTML = '';
    
    favorites.forEach(f => {
        grid.innerHTML += `
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
                <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600 relative">
                    <div class="absolute inset-0 flex items-center justify-center"><i class="fa-solid fa-basketball text-white text-8xl opacity-50"></i></div>
                    <button onclick="removeFavorite(${f.id})" class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full flex items-center justify-center text-red-500 hover:bg-red-50">
                        <i class="fa-solid fa-heart"></i>
                    </button>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="font-bold text-xl text-gray-900">${f.name}</h3>
                        <div class="flex items-center gap-1 bg-yellow-100 px-2 py-1 rounded-lg">
                            <i class="fa-solid fa-star text-yellow-500 text-sm"></i><span class="font-bold text-sm">${f.rating}</span>
                        </div>
                    </div>
                    <p class="text-gray-500 text-sm mb-3"><i class="fa-solid fa-location-dot mr-1"></i> ${f.location}</p>
                    <div class="flex gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs">Indoor</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs">AC</span>
                    </div>
                    <div class="flex justify-between items-center pt-4 border-t">
                        <p class="text-orange-500 font-bold">Rp ${f.price.toLocaleString('id-ID')}<span class="text-sm text-gray-400 font-normal">/jam</span></p>
                        <button class="px-4 py-2 bg-orange-500 text-white rounded-lg text-sm hover:bg-orange-600">Booking</button>
                    </div>
                </div>
            </div>
        `;
    });
}

function openAddFavorite() {
    document.getElementById('addModal').classList.remove('hidden');
}

function closeAddModal() {
    document.getElementById('addModal').classList.add('hidden');
}

function saveFavorite() {
    const name = document.getElementById('favName').value;
    const location = document.getElementById('favLocation').value;
    const price = parseInt(document.getElementById('favPrice').value);
    
    if (!name || !location || !price) {
        showToast('error', 'Data Tidak Lengkap', 'Mohon lengkapi semua field');
        return;
    }
    
    favorites.push({id: Date.now(), name, location, price, rating: 4.8});
    localStorage.setItem('favorites', JSON.stringify(favorites));
    renderFavorites();
    closeAddModal();
    showToast('success', 'Lapangan Ditambahkan', 'Lapangan berhasil ditambahkan ke favorit');
}

function removeFavorite(id) {
    if (confirm('Hapus dari favorit?')) {
        favorites = favorites.filter(f => f.id !== id);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        renderFavorites();
        showToast('success', 'Dihapus dari Favorit', 'Lapangan dihapus dari favorit');
    }
}

function showToast(type, title, msg) {
    const toast = document.getElementById('toast');
    const icon = document.getElementById('toastIcon');
    toast.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-xl shadow-lg text-white ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}`;
    icon.className = type === 'success' ? 'fa-solid fa-check text-xl' : 'fa-solid fa-xmark text-xl';
    document.getElementById('toastTitle').textContent = title;
    document.getElementById('toastMessage').textContent = msg;
    toast.classList.remove('hidden');
    setTimeout(() => toast.classList.add('hidden'), 3000);
}

renderFavorites();
</script>
</body>
</html>