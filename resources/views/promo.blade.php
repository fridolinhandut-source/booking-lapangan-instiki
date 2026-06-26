<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Promo - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Promo & Voucher</h1>
        
        <div class="bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl p-8 mb-6 text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-20 -mt-20"></div>
            <div class="relative z-10">
                <span class="bg-white text-orange-500 px-3 py-1 rounded-full text-xs font-bold">PROMO SPESIAL</span>
                <h2 class="text-3xl font-bold mt-4 mb-2">Diskon 20% Booking Pertama!</h2>
                <p class="mb-4 opacity-90">Gunakan kode promo untuk diskon spesial</p>
                <div class="bg-white/20 backdrop-blur-sm rounded-lg p-3 inline-block">
                    <span class="font-mono font-bold text-xl">HOOP20</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm mb-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Punya Kode Promo?</h3>
            <div class="flex gap-4">
                <input type="text" id="promoCode" placeholder="Masukkan kode promo..." class="flex-1 px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-orange-500">
                <button onclick="applyPromo()" class="px-8 py-3 bg-orange-500 text-white rounded-xl font-medium hover:bg-orange-600">Gunakan</button>
            </div>
        </div>

        <h3 class="text-xl font-bold text-gray-900 mb-4">10 Voucher Tersedia</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="promoList"></div>
    </main>
</div>

<div id="toast" class="hidden fixed top-4 right-4 z-50 px-6 py-4 rounded-xl shadow-lg bg-green-500 text-white">
    <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i id="toastIcon" class="fa-solid fa-check text-xl"></i></div>
        <div><h4 id="toastTitle" class="font-bold">Berhasil!</h4><p id="toastMessage" class="text-sm"></p></div>
    </div>
</div>

<script>
const vouchers = [
    {code: 'HOOP20', title: 'Diskon 20% Pertama', desc: 'Untuk booking pertama Anda', color: 'orange', expire: '30 Juni 2024'},
    {code: 'WEEKEND15', title: 'Weekend Special', desc: 'Diskon 15% Sabtu & Minggu', color: 'blue', expire: '30 Juni 2024'},
    {code: 'NEWMEMBER', title: 'Member Baru', desc: 'Cashback Rp 50.000', color: 'green', expire: '31 Juli 2024'},
    {code: 'LOYAL5', title: 'Booking 5x Gratis 1x', desc: 'Loyalty reward', color: 'purple', expire: '31 Des 2024'},
    {code: 'EARLY25', title: 'Early Bird', desc: 'Diskon 25% sebelum jam 10', color: 'pink', expire: '30 Juni 2024'},
    {code: 'INSTIKI10', title: 'Special INSTIKI', desc: 'Diskon 10% khusus mahasiswa', color: 'indigo', expire: '31 Ags 2024'},
    {code: 'HOLIDAY30', title: 'Holiday Promo', desc: 'Diskon 30% hari libur', color: 'red', expire: '15 Juli 2024'},
    {code: 'NIGHT20', title: 'Night Booking', desc: 'Diskon 20% booking malam', color: 'gray', expire: '30 Juni 2024'},
    {code: 'GROUP50', title: 'Group Booking', desc: 'Diskon Rp 50.000 min 5 orang', color: 'teal', expire: '31 Juli 2024'},
    {code: 'ANNIVERSARY', title: 'Anniversary', desc: 'Diskon 40% ulang tahun HoopBook', color: 'yellow', expire: '1 Ags 2024'}
];

function renderVouchers() {
    const list = document.getElementById('promoList');
    list.innerHTML = '';
    vouchers.forEach(v => {
        list.innerHTML += `
            <div class="bg-white rounded-2xl p-6 shadow-sm border-l-4 border-${v.color}-500 hover:shadow-lg transition cursor-pointer" onclick="useVoucher('${v.code}')">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="bg-${v.color}-100 text-${v.color}-600 px-3 py-1 rounded-full text-xs font-bold">KLIK PAKAI</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-2">${v.title}</h3>
                    </div>
                    <i class="fa-solid fa-ticket text-3xl text-${v.color}-500"></i>
                </div>
                <p class="text-gray-600 mb-4">${v.desc}</p>
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-xs text-gray-500">Kode Promo</p>
                        <p class="font-mono font-bold text-lg text-${v.color}-500">${v.code}</p>
                    </div>
                    <button class="px-4 py-2 bg-${v.color}-500 text-white rounded-lg hover:bg-${v.color}-600">Gunakan</button>
                </div>
                <p class="text-xs text-gray-400 mt-3"><i class="fa-solid fa-clock mr-1"></i> Berlaku sampai ${v.expire}</p>
            </div>
        `;
    });
}

function useVoucher(code) {
    document.getElementById('promoCode').value = code;
    showToast('success', 'Voucher Dipilih', `Kode ${code} siap digunakan`);
}

function applyPromo() {
    const code = document.getElementById('promoCode').value.trim().toUpperCase();
    if (!code) {
        showToast('error', 'Kode Kosong', 'Masukkan kode promo');
        return;
    }
    const valid = vouchers.find(v => v.code === code);
    if (valid) {
        showToast('success', 'Promo Berhasil!', `Kode ${code} digunakan. Diskon diterapkan.`);
        document.getElementById('promoCode').value = '';
    } else {
        showToast('error', 'Kode Tidak Valid', 'Kode promo tidak valid');
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

renderVouchers();
</script>
</body>
</html>