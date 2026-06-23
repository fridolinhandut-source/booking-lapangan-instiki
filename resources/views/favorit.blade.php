@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;}
.card{background:white;border-radius:20px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.image{height:160px;display:flex;justify-content:center;align-items:center;font-size:70px;background:linear-gradient(135deg,#0f172a,#ff7300);}
.body{padding:16px;}
.body h4{font-size:18px;font-weight:bold;}
.body .loc{color:#888;font-size:13px;margin:6px 0;}
.body .rating{color:#ffaa00;font-size:14px;}
.body .price{color:#ff7300;font-weight:bold;font-size:18px;margin:8px 0;}
.body .btn{width:100%;padding:12px;background:#ff7300;color:white;border:none;border-radius:10px;font-size:15px;cursor:pointer;}
.like{color:red;font-size:20px;float:right;}
</style>
<div class="page">
    <div class="title">Favorit ❤️</div>
    <div class="grid">
        <div class="card">
            <div class="image">🏀</div>
            <div class="body">
                <h4>Giant Arena <span class="like">♥</span></h4>
                <div class="loc">📍 Denpasar</div>
                <div class="rating">⭐ 4.8</div>
                <div class="price">Rp 250.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
        <div class="card">
            <div class="image">🏆</div>
            <div class="body">
                <h4>Elite Sport Center <span class="like">♥</span></h4>
                <div class="loc">📍 Denpasar</div>
                <div class="rating">⭐ 5.0</div>
                <div class="price">Rp 350.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
        <div class="card">
            <div class="image">🔥</div>
            <div class="body">
                <h4>Champion Court <span class="like">♥</span></h4>
                <div class="loc">📍 Denpasar</div>
                <div class="rating">⭐ 4.9</div>
                <div class="price">Rp 400.000 / jam</div>
                <button class="btn" onclick="window.location='/pembayaran'">Booking</button>
            </div>
        </div>
    </div>
</div>
@endsection