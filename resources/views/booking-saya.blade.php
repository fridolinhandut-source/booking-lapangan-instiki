@extends('layout')

@section('title', 'Booking Saya')
@section('page_title', 'Booking Saya')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="notification-area"></div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-2xl font-bold text-gray-900">Riwayat Booking Saya</h3>
            <a href="{{ route('cari.lapangan') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">+ Booking Baru</a>
        </div>
        
        <div class="space-y-4" id="booking-list">
            <div class="border-2 border-gray-200 rounded-xl p-6 hover:shadow-lg transition" data-booking-id="1">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-900">Lapangan Basket A</h4>
                        <p class="text-gray-600 mt-1">📍 Jakarta Selatan</p>
                    </div>
                    <span class="status-badge bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-bold">Aktif</span>
                </div>
                <div class="grid grid-cols-4 gap-4 text-sm mb-6 bg-gray-50 p-4 rounded-lg">
                    <div><p class="text-gray-500 font-semibold">Tanggal</p><p class="font-bold text-lg">25 Juni 2026</p></div>
                    <div><p class="text-gray-500 font-semibold">Jam</p><p class="font-bold text-lg">10:00 - 11:00</p></div>
                    <div><p class="text-gray-500 font-semibold">Durasi</p><p class="font-bold text-lg">1 Jam</p></div>
                    <div><p class="text-gray-500 font-semibold">Total</p><p class="font-bold text-lg text-orange-600">Rp 150.000</p></div>
                </div>
                <div class="flex gap-3">
                    <button onclick="editBooking(1)" class="flex-1 bg-blue-600 text-white px-4 py-3 rounded-lg hover:bg-blue-700 font-semibold">✏️ Edit</button>
                    <button onclick="cancelBooking(1)" class="flex-1 bg-yellow-500 text-white px-4 py-3 rounded-lg hover:bg-yellow-600 font-semibold">❌ Batalkan</button>
                    <button onclick="deleteBooking(1)" class="flex-1 bg-red-600 text-white px-4 py-3 rounded-lg hover:bg-red-700 font-semibold">️ Hapus</button>
                    <button onclick="printBooking(1)" class="flex-1 bg-green-600 text-white px-4 py-3 rounded-lg hover:bg-green-700 font-semibold">🖨️ Cetak</button>
                </div>
            </div>

            <div class="border-2 border-gray-200 rounded-xl p-6 hover:shadow-lg transition" data-booking-id="2">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h4 class="font-bold text-xl text-gray-900">Lapangan Basket B</h4>
                        <p class="text-gray-600 mt-1">📍 Jakarta Barat</p>
                    </div>
                    <span class="status-badge bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-bold">Selesai</span>
                </div>
                <div class="grid grid-cols-4 gap-4 text-sm mb-6 bg-gray-50 p-4 rounded-lg">
                    <div><p class="text-gray-500 font-semibold">Tanggal</p><p class="font-bold text-lg">20 Juni 2026</p></div>
                    <div><p class="text-gray-500 font-semibold">Jam</p><p class="font-bold text-lg">14:00 - 15:00</p></div>
                    <div><p class="text-gray-500 font-semibold">Durasi</p><p class="font-bold text-lg">1 Jam</p></div>
                    <div><p class="text-gray-500 font-semibold">Total</p><p class="font-bold text-lg text-orange-600">Rp 120.000</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full">
        <h3 class="text-2xl font-bold mb-6 text-gray-900">Edit Booking</h3>
        <form onsubmit="saveEdit(event)" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal</label>
                <input type="date" id="edit-tanggal" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Jam</label>
                <select id="edit-jam" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg">
                    <option value="08:00-09:00">08:00 - 09:00</option>
                    <option value="09:00-10:00">09:00 - 10:00</option>
                    <option value="10:00-11:00">10:00 - 11:00</option>
                    <option value="14:00-15:00">14:00 - 15:00</option>
                </select>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit" class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">💾 Simpan</button>
                <button type="button" onclick="closeEditModal()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg hover:bg-gray-400 font-semibold">Batal</button>
            </div>
        </form>
    </div>
</div>

<script>
let currentEditId = null;

function editBooking(id) {
    currentEditId = id;
    document.getElementById('editModal').classList.remove('hidden');
}

function closeEditModal() {
    document.getElementById('editModal').classList.add('hidden');
    currentEditId = null;
}

function saveEdit(event) {
    event.preventDefault();
    closeEditModal();
    showNotification('✅ Booking berhasil diperbarui!', 'success');
}

function cancelBooking(id) {
    if(confirm('Yakin ingin membatalkan booking ini?')) {
        const booking = document.querySelector(`[data-booking-id="${id}"]`);
        const status = booking.querySelector('.status-badge');
        status.className = 'status-badge bg-red-100 text-red-800 px-4 py-2 rounded-full text-sm font-bold';
        status.textContent = 'Dibatalkan';
        showNotification('❌ Booking berhasil dibatalkan!', 'error');
    }
}

function deleteBooking(id) {
    if(confirm('Yakin ingin menghapus booking ini? Tindakan ini tidak dapat dibatalkan!')) {
        const booking = document.querySelector(`[data-booking-id="${id}"]`);
        booking.remove();
        showNotification('🗑️ Booking berhasil dihapus!', 'success');
    }
}

function printBooking(id) {
    alert('Fitur cetak booking #' + id);
}

function showNotification(message, type) {
    const area = document.getElementById('notification-area');
    const notif = document.createElement('div');
    const bgColor = type === 'success' ? 'bg-green-100 border-green-500 text-green-700' : 'bg-red-100 border-red-500 text-red-700';
    const icon = type === 'success' 
        ? '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>'
        : '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>';
    
    notif.className = `${bgColor} border-2 px-6 py-4 rounded-lg mb-4 flex items-center justify-between shadow-lg`;
    notif.innerHTML = `
        <div class="flex items-center">
            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">${icon}</svg>
            <p class="font-bold text-lg">${message}</p>
        </div>
        <button onclick="this.parentElement.remove()" class="text-2xl font-bold">✕</button>
    `;
    area.appendChild(notif);
    setTimeout(() => notif.remove(), 3000);
}
</script>
@endsection