@extends('layout')

@section('content')

<style>
.page { padding: 30px; }
.title { font-size: 40px; font-weight: bold; margin-bottom: 20px; }

.banner {
    background: linear-gradient(135deg, #0f172a, #1a2a4a);
    border-radius: 25px;
    padding: 40px;
    color: white;
    margin-bottom: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.banner h1 { font-size: 36px; font-weight: 800; }
.banner h1 span { color: #ff7300; }
.banner p { color: #aab; margin: 10px 0 20px; font-size: 16px; }
.banner button {
    background: #ff7300; color: white; border: none;
    padding: 14px 28px; border-radius: 12px; font-size: 16px; cursor: pointer;
}
.banner-emoji { font-size: 80px; }

.grid2 { display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin-bottom: 25px; }

.card {
    background: white; padding: 25px; border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}
.card h3 { font-size: 20px; font-weight: bold; margin-bottom: 20px; }

.booking-item { display: flex; justify-content: space-between; align-items: center; }
.booking-item h4 { font-size: 16px; font-weight: bold; }
.booking-item p { color: #888; font-size: 13px; margin-top: 4px; }
.badge {
    background: #e8f5e9; color: #2e7d32;
    padding: 6px 16px; border-radius: 20px; font-size: 13px;
}

.summary-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f0f0f0; font-size: 15px; }
.summary-row.total { font-weight: bold; font-size: 18px; color: #ff7300; border-bottom: none; }

.section-title { font-size: 22px; font-weight: bold; margin-bottom: 20px; }

.grid3 { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
.mini-card {
    background: white; border-radius: 20px; overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}
.mini-image {
    height: 160px; display: flex; justify-content: center; align-items: center;
    font-size: 70px;
    background: linear-gradient(135deg, #0f172a, #ff7300);
}
.mini-body { padding: 16px; }
.mini-body h4 { font-size: 18px; font-weight: bold; }
.mini-body .loc { color: #888; font-size: 13px; margin: 6px 0; }
.mini-body .price { color: #ff7300; font-weight: bold; font-size: 18px; margin: 8px 0; }
.mini-body .btn {
    width: 100%; padding: 12px; background: #ff7300; color: white;
    border: none; border-radius: 10px; font-size: 15px; cursor: pointer;
}
</style>

<div class="page">
    <div class="title">Dashboard</div>

    <!-- BANNER -->
    <div class="banner">
        <div>
            <h1>Booking Lapangan jadi <span>lebih mudah</span></h1>
            <p>Temukan lapangan terbaik</p>
            <button onclick="window.location='/cari-lapangan'">Cari Lapangan</button>
        </div>
        <div class="banner-emoji">🏀</div>
    </div>

    <!-- BOOKING & RINGKASAN -->
    <div class="grid2">
        <div class="card">
            <h3>Booking Mendatang</h3>
            <div class="booking-item">
                <div>
                    <h4>Giant Arena Court</h4>
                    <p>Jakarta Selatan</p>
                </div>
                <span class="badge">Dikonfirmasi</span>
            </div>
        </div>
        <div class="card">
            <h3>Ringkasan</h3>
            <div class="summary-row"><span>Total Booking</span><span>12</span></div>
            <div class="summary-row"><span>Selesai</span><span>10</span></div>
            <div class="summary-row"><span>Dibatalkan</span><span>2</span></div>
            <div class="summary-row total"><span>Rp 2.450.000</span></div>
        </div>
    </div>

    <!-- REKOMENDASI -->
    <div class="section-title">Rekomendasi Lapangan</div>
    <div class="grid3">
        <div class="mini-card">
            <div class="mini-image">🏀</div>
            <div class="mini-body">
                <h4>Giant Arena</h4>
                <div class="loc">📍 Denpasar &nbsp; ⭐ 4.8</div>
                <div class="price">Rp 250.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
        <div class="mini-card">
            <div class="mini-image">⛹️</div>
            <div class="mini-body">
                <h4>Victory Court</h4>
                <div class="loc">📍 Denpasar &nbsp; ⭐ 4.9</div>
                <div class="price">Rp 300.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
        <div class="mini-card">
            <div class="mini-image">🏆</div>
            <div class="mini-body">
                <h4>Elite Sport Center</h4>
                <div class="loc">📍 Denpasar &nbsp; ⭐ 5.0</div>
                <div class="price">Rp 350.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
    </div>
</div>

@endsection