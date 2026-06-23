@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.chat-list{display:flex;flex-direction:column;gap:12px;}
.chat-item{background:white;border-radius:16px;padding:16px 20px;box-shadow:0 4px 12px rgba(0,0,0,0.08);display:flex;align-items:center;gap:16px;cursor:pointer;}
.chat-item:hover{background:#fff3e0;}
.avatar{width:50px;height:50px;border-radius:50%;background:#ff7300;display:flex;align-items:center;justify-content:center;font-size:22px;color:white;flex-shrink:0;}
.chat-info{flex:1;}
.chat-info h4{font-size:16px;font-weight:bold;}
.chat-info p{color:#888;font-size:13px;margin-top:4px;}
.chat-meta{text-align:right;}
.chat-meta .time{font-size:12px;color:#aaa;}
.chat-meta .unread{background:#ff7300;color:white;border-radius:50%;width:20px;height:20px;display:flex;align-items:center;justify-content:center;font-size:11px;margin-top:6px;margin-left:auto;}
</style>
<div class="page">
    <div class="title">Pesan</div>
    <div class="chat-list">
        <div class="chat-item">
            <div class="avatar">🏀</div>
            <div class="chat-info">
                <h4>Giant Arena Court</h4>
                <p>Booking kamu telah dikonfirmasi untuk tanggal 25 Juni</p>
            </div>
            <div class="chat-meta">
                <div class="time">10:30</div>
                <div class="unread">2</div>
            </div>
        </div>
        <div class="chat-item">
            <div class="avatar">⛹️</div>
            <div class="chat-info">
                <h4>Victory Court</h4>
                <p>Terima kasih telah menggunakan layanan kami!</p>
            </div>
            <div class="chat-meta">
                <div class="time">Kemarin</div>
            </div>
        </div>
        <div class="chat-item">
            <div class="avatar">🏆</div>
            <div class="chat-info">
                <h4>Elite Sport Center</h4>
                <p>Pembayaran kamu berhasil diterima</p>
            </div>
            <div class="chat-meta">
                <div class="time">20 Jun</div>
            </div>
        </div>
        <div class="chat-item">
            <div class="avatar">📢</div>
            <div class="chat-info">
                <h4>HoopBook</h4>
                <p>Promo spesial weekend! Diskon 15% untuk booking lapangan</p>
            </div>
            <div class="chat-meta">
                <div class="time">19 Jun</div>
                <div class="unread">1</div>
            </div>
        </div>
    </div>
</div>
@endsection