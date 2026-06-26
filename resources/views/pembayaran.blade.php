@extends('layout')

@section('title', 'Pembayaran')
@section('page_title', 'Pembayaran')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Notification Area -->
    <div id="notification-area"></div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Payment Methods & Details -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Payment Methods -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-xl font-bold mb-6 text-gray-900">Pilih Metode Pembayaran</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div onclick="selectPayment('BCA')" class="payment-method border-2 border-orange-500 rounded-xl p-4 text-center cursor-pointer bg-orange-50 hover:shadow-lg transition" data-method="BCA">
                        <div class="text-4xl mb-2">🏦</div>
                        <div class="font-semibold text-gray-900">BCA</div>
                    </div>
                    <div onclick="selectPayment('Mandiri')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-blue-500 hover:shadow-lg transition" data-method="Mandiri">
                        <div class="text-4xl mb-2"></div>
                        <div class="font-semibold text-gray-900">Mandiri</div>
                    </div>
                    <div onclick="selectPayment('BNI')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-red-500 hover:shadow-lg transition" data-method="BNI">
                        <div class="text-4xl mb-2">🏦</div>
                        <div class="font-semibold text-gray-900">BNI</div>
                    </div>
                    <div onclick="selectPayment('GoPay')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-green-500 hover:shadow-lg transition" data-method="GoPay">
                        <div class="text-4xl mb-2">💚</div>
                        <div class="font-semibold text-gray-900">GoPay</div>
                    </div>
                    <div onclick="selectPayment('OVO')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-purple-500 hover:shadow-lg transition" data-method="OVO">
                        <div class="text-4xl mb-2">💜</div>
                        <div class="font-semibold text-gray-900">OVO</div>
                    </div>
                    <div onclick="selectPayment('DANA')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-blue-500 hover:shadow-lg transition" data-method="DANA">
                        <div class="text-4xl mb-2">💙</div>
                        <div class="font-semibold text-gray-900">DANA</div>
                    </div>
                    <div onclick="selectPayment('QRIS')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-indigo-500 hover:shadow-lg transition" data-method="QRIS">
                        <div class="text-4xl mb-2">📱</div>
                        <div class="font-semibold text-gray-900">QRIS</div>
                    </div>
                    <div onclick="selectPayment('Kartu')" class="payment-method border-2 border-gray-200 rounded-xl p-4 text-center cursor-pointer hover:border-pink-500 hover:shadow-lg transition" data-method="Kartu">
                        <div class="text-4xl mb-2">💳</div>
                        <div class="font-semibold text-gray-900">Kartu</div>
                    </div>
                </div>
            </div>

            <!-- Payment Details -->
            <div class="bg-white rounded-2xl shadow-sm p-6">
                <h3 class="text-xl font-bold mb-6 text-gray-900">Detail Pembayaran</h3>
                
                <form id="payment-form" onsubmit="processPayment(event)" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Lapangan</label>
                        <select id="lapangan" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white">
                            <option value="">-- Pilih Lapangan --</option>
                            <option value="INSTIKI - Denpasar, Panjer">INSTIKI - Denpasar, Panjer</option>
                            <option value="Lapangan A - Jakarta Selatan">Lapangan A - Jakarta Selatan</option>
                            <option value="Lapangan B - Jakarta Barat">Lapangan B - Jakarta Barat</option>
                            <option value="Lapangan C - Jakarta Timur">Lapangan C - Jakarta Timur</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Pemesan</label>
                        <input type="text" id="nama" value="{{ auth()->user()->name }}" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Booking</label>
                            <input type="date" id="tanggal" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Jam</label>
                            <select id="jam" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white">
                                <option value="">-- Pilih Jam --</option>
                                <option value="08:00-09:00">08:00 - 09:00</option>
                                <option value="09:00-10:00">09:00 - 10:00</option>
                                <option value="10:00-11:00">10:00 - 11:00</option>
                                <option value="11:00-12:00">11:00 - 12:00</option>
                                <option value="13:00-14:00">13:00 - 14:00</option>
                                <option value="14:00-15:00">14:00 - 15:00</option>
                                <option value="15:00-16:00">15:00 - 16:00</option>
                                <option value="16:00-17:00">16:00 - 17:00</option>
                                <option value="17:00-18:00">17:00 - 18:00</option>
                                <option value="18:00-19:00">18:00 - 19:00</option>
                                <option value="19:00-20:00">19:00 - 20:00</option>
                                <option value="20:00-21:00">20:00 - 21:00</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Durasi (Jam)</label>
                        <select id="durasi" onchange="calculateTotal()" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent bg-white">
                            <option value="1">1 Jam</option>
                            <option value="2">2 Jam</option>
                            <option value="3">3 Jam</option>
                            <option value="4">4 Jam</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Harga per Jam (Rp)</label>
                        <input type="number" id="harga" value="150000" min="0" oninput="calculateTotal()" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nominal Pembayaran (Rp)</label>
                        <input type="number" id="nominal" value="150000" min="0" oninput="checkPayment()" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <p id="payment-status" class="text-sm mt-2"></p>
                    </div>

                    <div class="border-t-2 border-gray-200 pt-4 mt-4">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-bold text-gray-900">Total Pembayaran</span>
                            <span id="total-display" class="text-3xl font-bold text-orange-600">Rp 150.000</span>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" id="btn-bayar" class="flex-1 bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-4 rounded-lg hover:shadow-xl transition duration-200 transform hover:scale-105 disabled:bg-gray-400 disabled:cursor-not-allowed">
                            💳 Bayar Sekarang
                        </button>
                        <button type="button" onclick="resetForm()" class="px-6 bg-gray-300 text-gray-700 font-bold py-4 rounded-lg hover:bg-gray-400 transition">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Transaction History -->
        <div>
            <div class="bg-white rounded-2xl shadow-sm p-6 sticky top-6">
                <h3 class="text-xl font-bold mb-6 text-gray-900">Riwayat Transaksi</h3>
                
                <div id="transaction-list" class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-semibold text-gray-900">INSTIKI - Denpasar, Panjer</p>
                                <p class="text-sm text-gray-500">25/6/2026, 13:59:38</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">Berhasil</span>
                        </div>
                        <p class="text-orange-600 font-bold text-lg">Rp 1.000</p>
                        <div class="flex gap-2 mt-2">
                            <button onclick="printNota(1)" class="text-xs bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">️ Cetak</button>
                            <button onclick="deleteTransaction(1)" class="text-xs bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">🗑️ Hapus</button>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 pb-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <p class="font-semibold text-gray-900">INSTIKI - Denpasar, Panjer</p>
                                <p class="text-sm text-gray-500">25/6/2026, 13:37:40</p>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">Berhasil</span>
                        </div>
                        <p class="text-orange-600 font-bold text-lg">Rp 500.000</p>
                        <div class="flex gap-2 mt-2">
                            <button onclick="printNota(2)" class="text-xs bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">🖨️ Cetak</button>
                            <button onclick="deleteTransaction(2)" class="text-xs bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">🗑️ Hapus</button>
                        </div>
                    </div>
                </div>

                <div id="empty-transaction" class="text-center py-8 hidden">
                    <p class="text-gray-500">Belum ada transaksi</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nota -->
<div id="nota-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full">
        <div id="nota-content" class="mb-6">
            <!-- Nota content will be injected here -->
        </div>
        <div class="flex gap-3">
            <button onclick="window.print()" class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 font-semibold">🖨️ Cetak Nota</button>
            <button onclick="closeNota()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg hover:bg-gray-400 font-semibold">Tutup</button>
        </div>
    </div>
</div>

<script>
let selectedMethod = 'BCA';
let transactionId = 3;

function selectPayment(method) {
    selectedMethod = method;
    document.querySelectorAll('.payment-method').forEach(el => {
        el.classList.remove('border-orange-500', 'bg-orange-50');
        el.classList.add('border-gray-200');
    });
    const selected = document.querySelector(`[data-method="${method}"]`);
    selected.classList.remove('border-gray-200');
    selected.classList.add('border-orange-500', 'bg-orange-50');
}

function calculateTotal() {
    const harga = parseInt(document.getElementById('harga').value) || 0;
    const durasi = parseInt(document.getElementById('durasi').value) || 1;
    const total = harga * durasi;
    document.getElementById('nominal').value = total;
    document.getElementById('total-display').textContent = 'Rp ' + total.toLocaleString('id-ID');
    checkPayment();
}

function checkPayment() {
    const total = parseInt(document.getElementById('harga').value || 0) * parseInt(document.getElementById('durasi').value || 1);
    const nominal = parseInt(document.getElementById('nominal').value) || 0;
    const status = document.getElementById('payment-status');
    const btn = document.getElementById('btn-bayar');
    
    if (nominal < total) {
        status.textContent = '❌ Nominal kurang dari total pembayaran';
        status.className = 'text-sm mt-2 text-red-600 font-semibold';
        btn.disabled = true;
    } else if (nominal > total) {
        status.textContent = '⚠️ Nominal lebih dari total (kembalian: Rp ' + (nominal - total).toLocaleString('id-ID') + ')';
        status.className = 'text-sm mt-2 text-yellow-600 font-semibold';
        btn.disabled = false;
    } else {
        status.textContent = '✅ Nominal sesuai';
        status.className = 'text-sm mt-2 text-green-600 font-semibold';
        btn.disabled = false;
    }
}

function processPayment(event) {
    event.preventDefault();
    
    const lapangan = document.getElementById('lapangan').value;
    const nama = document.getElementById('nama').value;
    const tanggal = document.getElementById('tanggal').value;
    const jam = document.getElementById('jam').value;
    const durasi = document.getElementById('durasi').value;
    const nominal = document.getElementById('nominal').value;
    
    if (!lapangan || !tanggal || !jam) {
        showNotification('❌ Data tidak lengkap! Silakan isi semua field.', 'error');
        return;
    }
    
    // Add to transaction list
    const now = new Date();
    const dateStr = now.toLocaleDateString('id-ID') + ', ' + now.toLocaleTimeString('id-ID');
    
    const transactionHTML = `
        <div class="border-b border-gray-200 pb-4" id="transaction-${transactionId}">
            <div class="flex justify-between items-start mb-2">
                <div>
                    <p class="font-semibold text-gray-900">${lapangan}</p>
                    <p class="text-sm text-gray-500">${dateStr}</p>
                </div>
                <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full font-medium">Berhasil</span>
            </div>
            <p class="text-orange-600 font-bold text-lg">Rp ${parseInt(nominal).toLocaleString('id-ID')}</p>
            <div class="flex gap-2 mt-2">
                <button onclick="printNota(${transactionId})" class="text-xs bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">🖨️ Cetak</button>
                <button onclick="deleteTransaction(${transactionId})" class="text-xs bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">🗑️ Hapus</button>
            </div>
        </div>
    `;
    
    document.getElementById('transaction-list').insertAdjacentHTML('afterbegin', transactionHTML);
    document.getElementById('empty-transaction').classList.add('hidden');
    
    // Save transaction data for nota
    window['transaction_' + transactionId] = {
        id: transactionId,
        lapangan, nama, tanggal, jam, durasi, nominal, method: selectedMethod, date: dateStr
    };
    
    transactionId++;
    
    showNotification('✅ Pembayaran berhasil! Nota siap dicetak.', 'success');
    resetForm();
}

function printNota(id) {
    const t = window['transaction_' + id];
    if (!t) return;
    
    const notaHTML = `
        <div class="text-center border-b-2 border-dashed pb-4 mb-4">
            <h2 class="text-2xl font-bold text-gray-900">INSTIKI</h2>
            <p class="text-sm text-gray-600">Sistem Booking Lapangan</p>
            <p class="text-xs text-gray-500 mt-2">NOTA PEMBAYARAN</p>
        </div>
        <div class="space-y-2 text-sm">
            <div class="flex justify-between"><span class="text-gray-600">No. Transaksi:</span><span class="font-bold">#TRX-${String(t.id).padStart(5, '0')}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Tanggal:</span><span>${t.date}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Lapangan:</span><span>${t.lapangan}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Pemesan:</span><span>${t.nama}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Tanggal Booking:</span><span>${t.tanggal}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Jam:</span><span>${t.jam}</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Durasi:</span><span>${t.durasi} Jam</span></div>
            <div class="flex justify-between"><span class="text-gray-600">Metode:</span><span>${t.method}</span></div>
            <div class="border-t-2 border-dashed my-3"></div>
            <div class="flex justify-between text-lg font-bold"><span>TOTAL:</span><span class="text-orange-600">Rp ${parseInt(t.nominal).toLocaleString('id-ID')}</span></div>
        </div>
        <div class="text-center mt-6 pt-4 border-t-2 border-dashed">
            <p class="text-xs text-gray-500">Terima kasih atas pembayaran Anda!</p>
            <p class="text-xs text-gray-500">Simpan nota ini sebagai bukti pembayaran</p>
        </div>
    `;
    
    document.getElementById('nota-content').innerHTML = notaHTML;
    document.getElementById('nota-modal').classList.remove('hidden');
}

function closeNota() {
    document.getElementById('nota-modal').classList.add('hidden');
}

function deleteTransaction(id) {
    if (confirm('Yakin ingin menghapus transaksi ini?')) {
        const el = document.getElementById('transaction-' + id);
        if (el) {
            el.remove();
            showNotification('🗑️ Transaksi berhasil dihapus!', 'success');
        }
    }
}

function resetForm() {
    document.getElementById('payment-form').reset();
    document.getElementById('harga').value = 150000;
    document.getElementById('nama').value = '{{ auth()->user()->name }}';
    calculateTotal();
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
    setTimeout(() => notif.remove(), 4000);
}
</script>
@endsection