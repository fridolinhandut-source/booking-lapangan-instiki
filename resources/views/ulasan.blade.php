@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.card{background:white;border-radius:20px;padding:24px;margin-bottom:16px;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.card-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;}
.card-header h4{font-size:18px;font-weight:bold;}
.stars{color:#ffaa00;font-size:20px;}
.card p{color:#555;font-size:14px;line-height:1.6;}
.card .meta{color:#aaa;font-size:12px;margin-top:12px;}
.btn-add{background:#ff7300;color:white;border:none;padding:12px 24px;border-radius:12px;font-size:15px;cursor:pointer;margin-bottom:24px;}
</style>
<div class="page">
    <div class="title">Ulasan</div>
    <button class="btn-add">+ Tulis Ulasan</button>
    <div class="card">
        <div class="card-header">
            <h4>🏀 Giant Arena Court</h4>
            <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>
        <p>Lapangan bagus, bersih dan luas. Fasilitas lengkap, ada kamar mandi dan kantin. Pasti balik lagi!</p>
        <div class="meta">📅 20 Juni 2026 &nbsp; — &nbsp; Admin</div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>⛹️ Victory Court</h4>
            <div class="stars">⭐⭐⭐⭐</div>
        </div>
        <p>Lapangan cukup bagus, tapi parkir agak sempit. Overall pengalaman booking mudah dan cepat.</p>
        <div class="meta">📅 15 Juni 2026 &nbsp; — &nbsp; Admin</div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>🏆 Elite Sport Center</h4>
            <div class="stars">⭐⭐⭐⭐⭐</div>
        </div>
        <p>Fasilitas premium, lantai lapangan bagus dan AC sejuk. Harga sepadan dengan kualitas!</p>
        <div class="meta">📅 10 Juni 2026 &nbsp; — &nbsp; Admin</div>
    </div>
</div>
@endsection