@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:20px;}
.promo-card{background:white;border-radius:20px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.promo-banner{height:120px;display:flex;align-items:center;justify-content:center;font-size:50px;}
.promo-body{padding:20px;}
.promo-body h4{font-size:18px;font-weight:bold;}
.promo-body p{color:#888;font-size:13px;margin:8px 0;}
.promo-code{background:#fff3e0;border:2px dashed #ff7300;border-radius:10px;padding:10px;text-align:center;font-weight:bold;color:#ff7300;font-size:16px;margin:12px 0;}
.promo-body .exp{font-size:12px;color:#aaa;}
.btn{width:100%;padding:12px;background:#ff7300;color:white;border:none;border-radius:10px;font-size:15px;cursor:pointer;}
</style>
<div class="page">
    <div class="title">Promo</div>
    <div class="grid">
        <div class="promo-card">
            <div class="promo-banner" style="background:linear-gradient(135deg,#ff7300,#ff9500);">🎉</div>
            <div class="promo-body">
                <h4>Diskon 20% Booking Pertama</h4>
                <p>Dapatkan diskon 20% untuk booking pertama kamu!</p>
                <div class="promo-code">NEWUSER20</div>
                <div class="exp">Berlaku hingga 31 Juli 2026</div>
                <br>
                <button class="btn">Pakai Promo</button>
            </div>
        </div>
        <div class="promo-card">
            <div class="promo-banner" style="background:linear-gradient(135deg,#071733,#1a3a6a);">🏀</div>
            <div class="promo-body">
                <h4>Weekend Special 15%</h4>
                <p>Booking di akhir pekan dan hemat 15%!</p>
                <div class="promo-code">WEEKEND15</div>
                <div class="exp">Berlaku hingga 31 Agustus 2026</div>
                <br>
                <button class="btn">Pakai Promo</button>
            </div>
        </div>
        <div class="promo-card">
            <div class="promo-banner" style="background:linear-gradient(135deg,#1db389,#0f6e56);">⚡</div>
            <div class="promo-body">
                <h4>Flash Sale 30%</h4>
                <p>Flash sale terbatas! Hemat 30% hari ini saja.</p>
                <div class="promo-code">FLASH30</div>
                <div class="exp">Berlaku hingga 22 Juni 2026</div>
                <br>
                <button class="btn">Pakai Promo</button>
            </div>
        </div>
    </div>
</div>
@endsection