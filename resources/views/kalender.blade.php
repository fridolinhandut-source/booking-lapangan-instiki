<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalender - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900">Kalender Booking</h1>
            <div class="flex gap-2">
                <button onclick="changeMonth(-1)" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50"><i class="fa-solid fa-chevron-left"></i></button>
                <span id="currentMonth" class="px-6 py-2 bg-white border border-gray-300 rounded-lg font-semibold"></span>
                <button onclick="changeMonth(1)" class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-50"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 bg-white rounded-2xl p-6 shadow-sm">
                <div class="grid grid-cols-7 gap-2 mb-4">
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Min</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Sen</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Sel</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Rab</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Kam</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Jum</div>
                    <div class="text-center text-sm font-semibold text-gray-500 py-2">Sab</div>
                </div>
                <div class="grid grid-cols-7 gap-2" id="calendarGrid"></div>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Booking di <span id="selectedDate">-</span></h3>
                <div class="space-y-3" id="dayBookings">
                    <p class="text-gray-500 text-center py-4">Klik tanggal untuk melihat booking</p>
                </div>
                <button onclick="openBookingModal()" class="w-full mt-4 py-3 bg-orange-500 text-white rounded-lg hover:bg-orange-600">
                    <i class="fa-solid fa-plus mr-2"></i>Booking di Tanggal Ini
                </button>
            </div>
        </div>
    </main>
</div>

<div id="bookingModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl p-6 max-w-md w-full">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Booking INSTIKI</h3>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal</label>
                <input type="date" id="bookDate" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" id="bookName" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Waktu</label>
                <select id="bookTime" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    <option>08:00-10:00</option><option>10:00-12:00</option>
                    <option>14:00-16:00</option><option>16:00-18:00</option>
                    <option>18:00-20:00</option><option>20:00-22:00</option>
                </select>
            </div>
        </div>
        <div class="flex gap-3 mt-6">
            <button onclick="closeBookingModal()" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg">Batal</button>
            <button onclick="saveBooking()" class="flex-1 px-4 py-2 bg-orange-500 text-white rounded-lg">Simpan</button>
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
let currentDate = new Date();
let bookings = JSON.parse(localStorage.getItem('calendarBookings')) || [];
let selectedDateStr = null;

const monthNames = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

function renderCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;
    
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const today = new Date();
    
    const grid = document.getElementById('calendarGrid');
    grid.innerHTML = '';
    
    for (let i = 0; i < firstDay; i++) {
        grid.innerHTML += '<div class="aspect-square"></div>';
    }
    
    for (let day = 1; day <= daysInMonth; day++) {
        const dateStr = `${year}-${String(month+1).padStart(2,'0')}-${String(day).padStart(2,'0')}`;
        const isToday = today.getDate() === day && today.getMonth() === month && today.getFullYear() === year;
        const dayBookings = bookings.filter(b => b.date === dateStr);
        const isSelected = selectedDateStr === dateStr;
        
        grid.innerHTML += `
            <div onclick="selectDate('${dateStr}')" class="aspect-square p-2 border ${isSelected ? 'border-2 border-orange-500 bg-orange-50' : isToday ? 'border-2 border-blue-500 bg-blue-50' : 'border-gray-200'} rounded-lg hover:bg-gray-50 cursor-pointer relative">
                <span class="text-sm font-medium ${isToday ? 'text-blue-600 font-bold' : ''}">${day}</span>
                ${dayBookings.length > 0 ? `<div class="mt-1 bg-orange-500 text-white text-[10px] px-1 py-0.5 rounded truncate">${dayBookings.length} booking</div>` : ''}
            </div>
        `;
    }
}

function selectDate(dateStr) {
    selectedDateStr = dateStr;
    const d = new Date(dateStr);
    document.getElementById('selectedDate').textContent = d.toLocaleDateString('id-ID', {day:'numeric', month:'long', year:'numeric'});
    renderCalendar();
    renderDayBookings();
}

function renderDayBookings() {
    const list = document.getElementById('dayBookings');
    const dayBookings = bookings.filter(b => b.date === selectedDateStr);
    
    if (dayBookings.length === 0) {
        list.innerHTML = '<p class="text-gray-500 text-center py-4">Tidak ada booking</p>';
        return;
    }
    
    list.innerHTML = '';
    dayBookings.forEach(b => {
        list.innerHTML += `
            <div class="border-l-4 border-orange-500 pl-3 py-2 bg-orange-50 rounded">
                <p class="font-bold text-sm">${b.name}</p>
                <p class="text-xs text-gray-600">${b.time}</p>
                <button onclick="deleteBooking(${b.id})" class="text-xs text-red-500 mt-1"><i class="fa-solid fa-trash mr-1"></i>Hapus</button>
            </div>
        `;
    });
}

function openBookingModal() {
    if (!selectedDateStr) {
        showToast('error', 'Pilih Tanggal', 'Klik tanggal terlebih dahulu');
        return;
    }
    document.getElementById('bookDate').value = selectedDateStr;
    document.getElementById('bookingModal').classList.remove('hidden');
}

function closeBookingModal() {
    document.getElementById('bookingModal').classList.add('hidden');
}

function saveBooking() {
    const name = document.getElementById('bookName').value;
    const time = document.getElementById('bookTime').value;
    
    if (!name) {
        showToast('error', 'Nama Kosong', 'Masukkan nama pemesan');
        return;
    }
    
    bookings.push({id: Date.now(), date: selectedDateStr, name, time});
    localStorage.setItem('calendarBookings', JSON.stringify(bookings));
    renderCalendar();
    renderDayBookings();
    closeBookingModal();
    showToast('success', 'Booking Disimpan', 'Booking berhasil ditambahkan');
    document.getElementById('bookName').value = '';
}

function deleteBooking(id) {
    bookings = bookings.filter(b => b.id !== id);
    localStorage.setItem('calendarBookings', JSON.stringify(bookings));
    renderCalendar();
    renderDayBookings();
    showToast('success', 'Booking Dihapus', 'Booking dihapus');
}

function changeMonth(dir) {
    currentDate.setMonth(currentDate.getMonth() + dir);
    renderCalendar();
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

renderCalendar();
</script>
</body>
</html>