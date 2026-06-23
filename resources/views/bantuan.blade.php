@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.card{background:white;border-radius:20px;padding:24px;margin-bottom:16px;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
details{margin-bottom:12px;border:1px solid #eee;border-radius:12px;overflow:hidden;}
summary{padding:16px 20px;font-size:15px;font-weight:bold;cursor:pointer;background:#fafafa;list-style:none;}
summary::-webkit-details-marker{display:none;}
summary::after{content:'›';float:right;font-size:20px;color:#ff7300;}
details[open] summary::after{content:'⌄';}
details p{padding:16px 20px;color:#555;font-size:14px;line-height:1.7;border-top:1px solid #eee;}
.contact-card{background:white;border-radius:20px;padding:24px;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.contact-card h3{font-size:20px;font-weight:bold;margin-bottom:20px;}
.contact-item{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid #f0f0f0;font-size:14px;}
.contact-item span:first-child{font-size:24px;}
.btn-chat{width:100%;padding:14px;background:#ff7300;color:white;border:none;border-radius:12px;font-size:16px;cursor:pointer;margin-top:16px;}
</style>
<div class="page">
    <div class="title">Pusat Bantuan</div>
    <div class="card">
        <h3 style="font-size:20px;font-weight:bold;margin-bottom:16px;">❓ FAQ</h3>
        <details>
            <summary>Bagaimana cara booking lapangan?</summary>
            <p>Pilih lapangan → Pilih jam → Lakukan pembayaran → Selesai! Kamu akan mendapat konfirmasi booking via email.</p>
        </details>
        <details>
            <summary>Bagaimana cara membatalkan booking?</summary>
            <p>Buka menu Booking Saya → Pilih booking yang ingin dibatalkan → Klik tombol Batalkan. Pembatalan harus dilakukan minimal 2 jam sebelum jadwal.</p>
        </details>
        <details>
            <summary>Metode pembayaran apa saja yang tersedia?</summary>
            <p>Kami menerima Transfer Bank, GoPay, OVO, Dana, dan kartu kredit/debit.</p>
        </details>
        <details>
            <summary>Bagaimana jika lapangan tidak tersedia?</summary>
            <p>Kamu bisa memilih jam lain atau lapangan alternatif. Gunakan fitur Cari Lapangan untuk melihat ketersediaan.</p>
        </details>
        <details>
            <summary>Apakah ada refund jika booking dibatalkan?</summary>
            <p>Refund 100% jika dibatalkan lebih dari 24 jam sebelum jadwal. Refund 50% jika dibatalkan 2-24 jam sebelum jadwal.</p>
        </details>
    </div>
    <div class="contact-card">
        <h3>📞 Hubungi Kami</h3>
        <div class="contact-item"><span>📧</span><span>support@hoopbook.com</span></div>
        <div class="contact-item"><span>📱</span><span>+62 812-3456-7890</span></div>
        <div class="contact-item"><span>⏰</span><span>Senin - Minggu, 08:00 - 22:00</span></div>
        <button class="btn-chat">💬 Chat dengan Kami</button>
    </div>
</div>
@endsection