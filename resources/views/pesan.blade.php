@extends('layout')

@section('title', 'Pesan')
@section('page_title', 'Pesan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="notification-area"></div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Compose Message -->
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <h3 class="text-xl font-bold mb-6 text-gray-900">Kirim Pesan Baru</h3>
            
            <form onsubmit="sendMessage(event)" class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Kepada</label>
                    <select required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Pilih Penerima --</option>
                        <option>Admin INSTIKI</option>
                        <option>Customer Service</option>
                        <option>Manajemen</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                    <input type="text" id="subjek" required placeholder="Masukkan subjek pesan" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                    <textarea id="pesan" required rows="6" placeholder="Tulis pesan Anda di sini..." class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold"> Kirim Pesan</button>
            </form>
        </div>

        <!-- Inbox -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-bold text-gray-900">Kotak Masuk</h3>
                <button onclick="refreshInbox()" class="text-blue-600 hover:text-blue-800 font-semibold">🔄 Refresh</button>
            </div>
            
            <div class="space-y-3" id="message-list">
                <div class="message-item border-2 border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer bg-blue-50" data-id="1">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <h4 class="font-bold text-gray-900">Admin INSTIKI</h4>
                                <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full">Baru</span>
                            </div>
                            <p class="font-semibold text-gray-800 mb-1">Konfirmasi Booking Anda</p>
                            <p class="text-sm text-gray-600">Terima kasih! Booking lapangan Anda untuk tanggal 25 Juni 2026 telah dikonfirmasi...</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">10:30</p>
                            <button onclick="event.stopPropagation(); deleteMessage(1)" class="mt-2 text-red-500 hover:text-red-700 text-sm">️ Hapus</button>
                        </div>
                    </div>
                </div>

                <div class="message-item border-2 border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer" data-id="2">
                    <div class="flex justify-between items-start">
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 mb-2">Promo Spesial</h4>
                            <p class="font-semibold text-gray-800 mb-1">Diskon 20% Weekend Ini!</p>
                            <p class="text-sm text-gray-600">Dapatkan diskon 20% untuk booking lapangan di weekend ini...</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-gray-500">Kemarin</p>
                            <button onclick="event.stopPropagation(); deleteMessage(2)" class="mt-2 text-red-500 hover:text-red-700 text-sm">🗑️ Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function sendMessage(event) {
    event.preventDefault();
    const subjek = document.getElementById('subjek').value;
    const pesan = document.getElementById('pesan').value;
    
    if (!subjek || !pesan) {
        showNotification('❌ Subjek dan pesan harus diisi!', 'error');
        return;
    }
    
    // Add to inbox
    const now = new Date();
    const timeStr = now.getHours() + ':' + String(now.getMinutes()).padStart(2, '0');
    const messageHTML = `
        <div class="message-item border-2 border-gray-200 rounded-xl p-4 hover:shadow-md transition cursor-pointer bg-blue-50" data-id="${Date.now()}">
            <div class="flex justify-between items-start">
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-2">
                        <h4 class="font-bold text-gray-900">Saya</h4>
                        <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded-full">Baru</span>
                    </div>
                    <p class="font-semibold text-gray-800 mb-1">${subjek}</p>
                    <p class="text-sm text-gray-600">${pesan.substring(0, 100)}...</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-gray-500">${timeStr}</p>
                    <button onclick="event.stopPropagation(); deleteMessage(${Date.now()})" class="mt-2 text-red-500 hover:text-red-700 text-sm">🗑️ Hapus</button>
                </div>
            </div>
        </div>
    `;
    
    document.getElementById('message-list').insertAdjacentHTML('afterbegin', messageHTML);
    event.target.reset();
    showNotification('✅ Pesan berhasil dikirim!', 'success');
}

function deleteMessage(id) {
    if (confirm('Yakin ingin menghapus pesan ini?')) {
        const msg = document.querySelector(`[data-id="${id}"]`);
        if (msg) {
            msg.remove();
            showNotification('🗑️ Pesan berhasil dihapus!', 'success');
        }
    }
}

function refreshInbox() {
    showNotification('🔄 Kotak masuk diperbarui!', 'success');
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