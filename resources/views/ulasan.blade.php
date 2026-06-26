<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Ulasan Lapangan</h1>
            <button onclick="openAddReview()" class="px-6 py-3 bg-orange-500 text-white rounded-xl hover:bg-orange-600">
                <i class="fa-solid fa-plus mr-2"></i>Tambah Ulasan
            </button>
        </div>

        <!-- Info Lapangan -->
        <div class="bg-white rounded-2xl p-6 shadow-sm mb-6 flex items-center gap-4">
            <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl flex items-center justify-center">
                <i class="fa-solid fa-basketball text-white text-3xl"></i>
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-900">INSTIKI</h2>
                <p class="text-gray-500"><i class="fa-solid fa-location-dot mr-1"></i> Denpasar, Panjer</p>
                <div class="flex items-center gap-1 mt-1">
                    <i class="fa-solid fa-star text-yellow-400"></i>
                    <span class="font-bold" id="avgRating">4.8</span>
                    <span class="text-gray-500 text-sm">(<span id="reviewCount">1</span> ulasan)</span>
                </div>
            </div>
        </div>

        <!-- List Ulasan -->
        <div class="space-y-4" id="reviewList"></div>

        <div id="emptyState" class="hidden text-center py-16 bg-white rounded-2xl">
            <i class="fa-regular fa-star text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Ulasan</h3>
            <p class="text-gray-500">Jadilah yang pertama mengulas lapangan INSTIKI</p>
        </div>
    </main>
</div>

<!-- Modal Tambah/Edit Ulasan -->
<div id="reviewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl p-6 max-w-md w-full">
        <h3 class="text-xl font-bold text-gray-900 mb-4" id="modalTitle">Tulis Ulasan</h3>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" id="reviewName" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <div class="flex gap-2" id="ratingStars">
                    <button onclick="setRating(1)" class="star-btn text-3xl text-gray-300"><i class="fa-solid fa-star"></i></button>
                    <button onclick="setRating(2)" class="star-btn text-3xl text-gray-300"><i class="fa-solid fa-star"></i></button>
                    <button onclick="setRating(3)" class="star-btn text-3xl text-gray-300"><i class="fa-solid fa-star"></i></button>
                    <button onclick="setRating(4)" class="star-btn text-3xl text-gray-300"><i class="fa-solid fa-star"></i></button>
                    <button onclick="setRating(5)" class="star-btn text-3xl text-gray-300"><i class="fa-solid fa-star"></i></button>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Komentar</label>
                <textarea id="reviewComment" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500"></textarea>
            </div>
        </div>
        <div class="flex gap-3 mt-6">
            <button onclick="closeReviewModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">Batal</button>
            <button onclick="saveReview()" class="flex-1 px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Simpan</button>
        </div>
    </div>
</div>

<div id="toast" class="hidden fixed top-4 right-4 z-50 px-6 py-4 rounded-xl shadow-lg bg-green-500 text-white">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
            <i id="toastIcon" class="fa-solid fa-check text-xl"></i>
        </div>
        <div>
            <h4 id="toastTitle" class="font-bold">Berhasil!</h4>
            <p id="toastMessage" class="text-sm">Data disimpan</p>
        </div>
    </div>
</div>

<script>
let reviews = JSON.parse(localStorage.getItem('reviews')) || [{
    id: 1, name: 'Andi Pratama', rating: 5, comment: 'Lapangan sangat bagus, fasilitas lengkap!', date: '2024-06-23'
}];
let currentRating = 0;
let currentEditId = null;

function renderReviews() {
    const list = document.getElementById('reviewList');
    const empty = document.getElementById('emptyState');
    
    if (reviews.length === 0) {
        list.innerHTML = '';
        empty.classList.remove('hidden');
        return;
    }
    
    empty.classList.add('hidden');
    list.innerHTML = '';
    
    reviews.forEach(r => {
        const stars = Array.from({length: 5}, (_, i) => 
            i < r.rating ? '<i class="fa-solid fa-star text-yellow-400"></i>' : '<i class="fa-regular fa-star text-gray-300"></i>'
        ).join('');
        
        list.innerHTML += `
            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">${r.name.charAt(0)}</div>
                        <div>
                            <h4 class="font-bold text-gray-900">${r.name}</h4>
                            <p class="text-xs text-gray-500">${r.date}</p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="editReview(${r.id})" class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg text-sm hover:bg-blue-200"><i class="fa-solid fa-pen mr-1"></i>Edit</button>
                        <button onclick="deleteReview(${r.id})" class="px-3 py-1 bg-red-100 text-red-600 rounded-lg text-sm hover:bg-red-200"><i class="fa-solid fa-trash mr-1"></i>Hapus</button>
                    </div>
                </div>
                <div class="flex items-center gap-1 mb-2">${stars}</div>
                <p class="text-gray-600">${r.comment}</p>
            </div>
        `;
    });
    
    // Update avg
    const avg = (reviews.reduce((a, r) => a + r.rating, 0) / reviews.length).toFixed(1);
    document.getElementById('avgRating').textContent = avg;
    document.getElementById('reviewCount').textContent = reviews.length;
}

function openAddReview() {
    currentEditId = null;
    document.getElementById('modalTitle').textContent = 'Tulis Ulasan';
    document.getElementById('reviewName').value = '';
    document.getElementById('reviewComment').value = '';
    setRating(0);
    document.getElementById('reviewModal').classList.remove('hidden');
}

function editReview(id) {
    currentEditId = id;
    const r = reviews.find(x => x.id === id);
    document.getElementById('modalTitle').textContent = 'Edit Ulasan';
    document.getElementById('reviewName').value = r.name;
    document.getElementById('reviewComment').value = r.comment;
    setRating(r.rating);
    document.getElementById('reviewModal').classList.remove('hidden');
}

function closeReviewModal() {
    document.getElementById('reviewModal').classList.add('hidden');
}

function setRating(n) {
    currentRating = n;
    document.querySelectorAll('.star-btn').forEach((btn, i) => {
        btn.className = i < n ? 'star-btn text-3xl text-yellow-400' : 'star-btn text-3xl text-gray-300';
    });
}

function saveReview() {
    const name = document.getElementById('reviewName').value;
    const comment = document.getElementById('reviewComment').value;
    
    if (!name || !comment || currentRating === 0) {
        showToast('error', 'Data Tidak Lengkap', 'Mohon lengkapi semua field');
        return;
    }
    
    if (currentEditId) {
        const idx = reviews.findIndex(r => r.id === currentEditId);
        reviews[idx] = {...reviews[idx], name, comment, rating: currentRating};
        showToast('success', 'Ulasan Diupdate', 'Ulasan berhasil diperbarui');
    } else {
        reviews.push({
            id: Date.now(), name, comment, rating: currentRating, date: new Date().toISOString().split('T')[0]
        });
        showToast('success', 'Ulasan Disimpan', 'Terima kasih atas ulasan Anda');
    }
    
    localStorage.setItem('reviews', JSON.stringify(reviews));
    renderReviews();
    closeReviewModal();
}

function deleteReview(id) {
    if (confirm('Yakin hapus ulasan ini?')) {
        reviews = reviews.filter(r => r.id !== id);
        localStorage.setItem('reviews', JSON.stringify(reviews));
        renderReviews();
        showToast('success', 'Ulasan Dihapus', 'Ulasan berhasil dihapus');
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

renderReviews();
</script>
</body>
</html>