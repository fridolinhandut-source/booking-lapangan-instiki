@extends('layout')

@section('title', 'Pengaturan')
@section('page_title', 'Pengaturan Akun')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="notification-area"></div>

    <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">
        <h3 class="text-2xl font-bold mb-6 text-gray-900">Profil Saya</h3>
        
        <form onsubmit="saveProfile(event)" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                <input type="text" id="profile-name" value="{{ auth()->user()->name }}" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                <input type="email" id="profile-email" value="{{ auth()->user()->email }}" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">No. Telepon</label>
                <input type="tel" id="profile-phone" placeholder="08xxxxxxxxxx" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat</label>
                <textarea id="profile-address" rows="3" placeholder="Masukkan alamat lengkap" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-semibold">💾 Simpan Perubahan</button>
        </form>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="text-2xl font-bold mb-6 text-gray-900">Ubah Password</h3>
        
        <form onsubmit="changePassword(event)" class="space-y-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password Lama</label>
                <input type="password" id="old-password" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Password Baru</label>
                <input type="password" id="new-password" required minlength="6" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <p class="text-xs text-gray-500 mt-1">Minimal 6 karakter</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Konfirmasi Password Baru</label>
                <input type="password" id="confirm-password" required minlength="6" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 font-semibold">🔒 Update Password</button>
        </form>
    </div>

    <div class="bg-white rounded-2xl shadow-sm p-6 mt-6">
        <h3 class="text-2xl font-bold mb-6 text-gray-900">Zona Bahaya</h3>
        
        <div class="border-2 border-red-200 rounded-xl p-6 bg-red-50">
            <h4 class="font-bold text-red-800 mb-2">Hapus Akun</h4>
            <p class="text-sm text-red-700 mb-4">Setelah akun dihapus, semua data akan hilang permanen dan tidak dapat dikembalikan.</p>
            <button onclick="deleteAccount()" class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 font-semibold">🗑️ Hapus Akun Saya</button>
        </div>
    </div>
</div>

<script>
function saveProfile(event) {
    event.preventDefault();
    const name = document.getElementById('profile-name').value;
    const email = document.getElementById('profile-email').value;
    const phone = document.getElementById('profile-phone').value;
    const address = document.getElementById('profile-address').value;
    
    if (!name || !email) {
        showNotification('❌ Nama dan email wajib diisi!', 'error');
        return;
    }
    
    showNotification('✅ Profil berhasil diperbarui!', 'success');
}

function changePassword(event) {
    event.preventDefault();
    const oldPass = document.getElementById('old-password').value;
    const newPass = document.getElementById('new-password').value;
    const confirmPass = document.getElementById('confirm-password').value;
    
    if (newPass !== confirmPass) {
        showNotification('❌ Password baru dan konfirmasi tidak cocok!', 'error');
        return;
    }
    
    if (newPass.length < 6) {
        showNotification('❌ Password minimal 6 karakter!', 'error');
        return;
    }
    
    showNotification('✅ Password berhasil diubah!', 'success');
    event.target.reset();
}

function deleteAccount() {
    if (confirm('PERINGATAN! Yakin ingin menghapus akun? Tindakan ini TIDAK DAPAT dibatalkan!')) {
        if (confirm('Ketik "HAPUS" untuk konfirmasi (ini hanya simulasi)')) {
            showNotification('🗑️ Fitur hapus akun (simulasi)', 'success');
        }
    }
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