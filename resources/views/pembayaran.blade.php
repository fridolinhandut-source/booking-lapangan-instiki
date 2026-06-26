<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Pembayaran</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <!-- Metode Pembayaran -->
                <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Pilih Metode Pembayaran</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <button onclick="selectMethod('bca')" class="method-btn border-2 border-orange-500 bg-orange-50 rounded-xl p-4 text-center">
                            <i class="fa-solid fa-building-columns text-2xl text-orange-500 mb-2"></i>
                            <p class="font-bold text-sm">BCA</p>
                        </button>
                        <button onclick="selectMethod('mandiri')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-building-columns text-2xl text-blue-500 mb-2"></i>
                            <p class="font-bold text-sm">Mandiri</p>
                        </button>
                        <button onclick="selectMethod('bni')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-building-columns text-2xl text-red-500 mb-2"></i>
                            <p class="font-bold text-sm">BNI</p>
                        </button>
                        <button onclick="selectMethod('gopay')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-wallet text-2xl text-green-500 mb-2"></i>
                            <p class="font-bold text-sm">GoPay</p>
                        </button>
                        <button onclick="selectMethod('ovo')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-wallet text-2xl text-purple-500 mb-2"></i>
                            <p class="font-bold text-sm">OVO</p>
                        </button>
                        <button onclick="selectMethod('dana')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-wallet text-2xl text-blue-400 mb-2"></i>
                            <p class="font-bold text-sm">DANA</p>
                        </button>
                        <button onclick="selectMethod('qris')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-qrcode text-2xl text-indigo-500 mb-2"></i>
                            <p class="font-bold text-sm">QRIS</p>
                        </button>
                        <button onclick="selectMethod('card')" class="method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300">
                            <i class="fa-solid fa-credit-card text-2xl text-pink-500 mb-2"></i>
                            <p class="font-bold text-sm">Kartu</p>
                        </button>
                    </div>
                </div>

                <!-- Form Pembayaran -->
                <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Detail Pembayaran</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Lapangan</label>
                            <select id="payCourt" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                                <option>INSTIKI - Denpasar, Panjer</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Pemesan</label>
                            <input type="text" id="payName" placeholder="Nama lengkap" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Booking</label>
                            <input type="date" id="payDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Waktu</label>
                            <select id="payTime" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                                <option>08:00 - 10:00</option>
                                <option>10:00 - 12:00</option>
                                <option>14:00 - 16:00</option>
                                <option>16:00 - 18:00</option>
                                <option>18:00 - 20:00</option>
                                <option>20:00 - 22:00</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Durasi (Jam)</label>
                            <input type="number" id="payDuration" min="1" value="2" onchange="calcTotal()" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Harga per Jam (Rp)</label>
                            <input type="number" id="payPrice" value="250000" onchange="calcTotal()" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nominal Pembayaran (Rp)</label>
                            <input type="number" id="payAmount" placeholder="Masukkan nominal" class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Total</span>
                                <span class="text-2xl font-bold text-orange-500" id="totalDisplay">Rp 500.000</span>
                            </div>
                        </div>
                        <button onclick="processPayment()" class="w-full py-4 bg-orange-500 text-white rounded-xl font-bold text-lg hover:bg-orange-600">
                            <i class="fa-solid fa-lock mr-2"></i> Bayar Sekarang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Riwayat -->
            <div class="bg-white rounded-2xl p-6 shadow-sm h-fit">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Riwayat Transaksi</h3>
                <div class="space-y-3" id="historyList"></div>
            </div>
        </div>
    </main>
</div>

<!-- Modal Struk -->
<div id="receiptModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl p-6 max-w-md w-full">
        <div class="text-center mb-4">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                <i class="fa-solid fa-check text-3xl text-green-500"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900">Pembayaran Berhasil!</h3>
        </div>
        
        <div class="bg-gray-50 rounded-xl p-4 mb-4">
            <div class="text-center border-b border-gray-300 pb-3 mb-3">
                <img src="{{ asset('images/instiki.png') }}" class="w-20 mx-auto mb-2">
                <p class="font-bold text-sm">INSTIKI BOOKING</p>
                <p class="text-xs text-gray-500">Denpasar, Panjer</p>
            </div>
            <div class="space-y-2 text-sm" id="receiptContent"></div>
        </div>
        
        <button onclick="printReceipt()" class="w-full py-3 bg-gray-700 text-white rounded-lg mb-2 hover:bg-gray-800">
            <i class="fa-solid fa-print mr-2"></i> Cetak Struk
        </button>
        <button onclick="closeReceipt()" class="w-full py-3 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Selesai</button>
    </div>
</div>

<div id="toast" class="hidden fixed top-4 right-4 z-50 px-6 py-4 rounded-xl shadow-lg bg-green-500 text-white">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i id="toastIcon" class="fa-solid fa-check text-xl"></i></div>
        <div><h4 id="toastTitle" class="font-bold">Berhasil!</h4><p id="toastMessage" class="text-sm"></p></div>
    </div>
</div>

<script>
let currentMethod = 'bca';
let history = JSON.parse(localStorage.getItem('paymentHistory')) || [];

function selectMethod(m) {
    currentMethod = m;
    document.querySelectorAll('.method-btn').forEach(btn => {
        btn.className = 'method-btn border-2 border-gray-200 rounded-xl p-4 text-center hover:border-orange-300';
    });
    event.currentTarget.className = 'method-btn border-2 border-orange-500 bg-orange-50 rounded-xl p-4 text-center';
}

function calcTotal() {
    const dur = parseInt(document.getElementById('payDuration').value) || 1;
    const price = parseInt(document.getElementById('payPrice').value) || 0;
    document.getElementById('totalDisplay').textContent = 'Rp ' + (dur * price).toLocaleString('id-ID');
}

function processPayment() {
    const name = document.getElementById('payName').value;
    const date = document.getElementById('payDate').value;
    const amount = parseInt(document.getElementById('payAmount').value);
    const total = parseInt(document.getElementById('payDuration').value) * parseInt(document.getElementById('payPrice').value);
    
    if (!name || !date || !amount) {
        showToast('error', 'Data Tidak Lengkap', 'Mohon lengkapi semua field');
        return;
    }
    
    if (amount < total) {
        showToast('error', 'Nominal Kurang', 'Nominal pembayaran kurang dari total');
        return;
    }
    
    const receipt = {
        id: 'TRX' + Date.now(),
        name, date,
        time: document.getElementById('payTime').value,
        duration: document.getElementById('payDuration').value,
        court: 'INSTIKI - Denpasar, Panjer',
        method: currentMethod.toUpperCase(),
        total, amount, change: amount - total,
        timestamp: new Date().toLocaleString('id-ID')
    };
    
    history.unshift(receipt);
    localStorage.setItem('paymentHistory', JSON.stringify(history));
    renderHistory();
    showReceipt(receipt);
    showToast('success', 'Pembayaran Berhasil!', 'Struk telah dibuat');
}

function showReceipt(r) {
    document.getElementById('receiptContent').innerHTML = `
        <div class="flex justify-between"><span class="text-gray-600">No. Transaksi</span><span class="font-mono font-bold">${r.id}</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Tanggal</span><span>${r.timestamp}</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Pemesan</span><span>${r.name}</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Lapangan</span><span>${r.court}</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Booking</span><span>${r.date} ${r.time}</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Durasi</span><span>${r.duration} jam</span></div>
        <div class="flex justify-between"><span class="text-gray-600">Metode</span><span>${r.method}</span></div>
        <div class="border-t border-gray-300 my-2"></div>
        <div class="flex justify-between font-bold"><span>Total</span><span>Rp ${r.total.toLocaleString('id-ID')}</span></div>
        <div class="flex justify-between"><span>Dibayar</span><span>Rp ${r.amount.toLocaleString('id-ID')}</span></div>
        <div class="flex justify-between text-green-600"><span>Kembali</span><span>Rp ${r.change.toLocaleString('id-ID')}</span></div>
        <div class="text-center text-xs text-gray-500 mt-3 pt-2 border-t border-gray-300">Terima kasih atas pembayaran Anda</div>
    `;
    document.getElementById('receiptModal').classList.remove('hidden');
}

function closeReceipt() {
    document.getElementById('receiptModal').classList.add('hidden');
    // Clear form
    document.getElementById('payName').value = '';
    document.getElementById('payAmount').value = '';
}

function printReceipt() {
    window.print();
}

function renderHistory() {
    const list = document.getElementById('historyList');
    if (history.length === 0) {
        list.innerHTML = '<p class="text-gray-500 text-center py-4">Belum ada transaksi</p>';
        return;
    }
    list.innerHTML = '';
    history.forEach(h => {
        list.innerHTML += `
            <div class="p-3 bg-gray-50 rounded-lg">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="font-bold text-sm">${h.court}</p>
                        <p class="text-xs text-gray-500">${h.timestamp}</p>
                    </div>
                    <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Berhasil</span>
                </div>
                <p class="font-bold text-orange-500 mt-1">Rp ${h.total.toLocaleString('id-ID')}</p>
            </div>
        `;
    });
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

renderHistory();
calcTotal();
</script>
</body>
</html>