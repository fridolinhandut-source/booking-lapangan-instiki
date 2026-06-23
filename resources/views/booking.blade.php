@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.tabs{display:flex;gap:10px;margin-bottom:20px;}
.tab{padding:10px 24px;border-radius:20px;border:2px solid #ff7300;color:#ff7300;background:white;cursor:pointer;font-size:14px;font-weight:bold;}
.tab.active{background:#ff7300;color:white;}
.card{background:white;border-radius:20px;padding:24px;margin-bottom:16px;box-shadow:0 4px 12px rgba(0,0,0,0.08);display:flex;justify-content:space-between;align-items:center;}
.card-info h4{font-size:18px;font-weight:bold;}
.card-info p{color:#888;font-size:13px;margin-top:4px;}
.card-info .date{color:#555;font-size:14px;margin-top:6px;}
.badge-green{background:#e8f5e9;color:#2e7d32;padding:6px 16px;border-radius:20px;font-size:13px;}
.badge-red{background:#ffebee;color:#c62828;padding:6px 16px;border-radius:20px;font-size:13px;}
.badge-yellow{background:#fff8e1;color:#f57f17;padding:6px 16px;border-radius:20px;font-size:13px;}
.price{font-size:20px;font-weight:bold;color:#ff7300;margin-top:8px;}
</style>
<div class="page">
    <div class="title">Booking Saya</div>
    <div class="tabs">
        <button class="tab active">Semua</button>
        <button class="tab">Aktif</button>
        <button class="tab">Selesai</button>
        <button class="tab">Dibatalkan</button>
    </div>
    <div class="card">
        <div class="card-info">
            <h4>🏀 Giant Arena Court</h4>
            <p>📍 Jakarta Selatan</p>
            <div class="date">📅 25 Juni 2026 &nbsp; ⏰ 08:00 - 10:00</div>
            <div class="price">Rp 500.000</div>
        </div>
        <span class="badge-green">Dikonfirmasi</span>
    </div>
    <div class="card">
        <div class="card-info">
            <h4>⛹️ Victory Court</h4>
            <p>📍 Denpasar</p>
            <div class="date">📅 20 Juni 2026 &nbsp; ⏰ 14:00 - 16:00</div>
            <div class="price">Rp 600.000</div>
        </div>
        <span class="badge-green">Selesai</span>
    </div>
    <div class="card">
        <div class="card-info">
            <h4>🏆 Elite Sport Center</h4>
            <p>📍 Denpasar</p>
            <div class="date">📅 15 Juni 2026 &nbsp; ⏰ 10:00 - 12:00</div>
            <div class="price">Rp 700.000</div>
        </div>
        <span class="badge-red">Dibatalkan</span>
    </div>
    <div class="card">
        <div class="card-info">
            <h4>🏟️ Basket House</h4>
            <p>📍 Denpasar</p>
            <div class="date">📅 28 Juni 2026 &nbsp; ⏰ 16:00 - 18:00</div>
            <div class="price">Rp 440.000</div>
        </div>
        <span class="badge-yellow">Menunggu</span>
    </div>
</div>
@endsection