@extends('layout')
@section('content')
<style>
.page{padding:30px;}
.title{font-size:40px;font-weight:bold;margin-bottom:20px;}
.card{background:white;border-radius:20px;padding:24px;margin-bottom:20px;box-shadow:0 4px 12px rgba(0,0,0,0.08);}
.card h3{font-size:18px;font-weight:bold;margin-bottom:20px;border-bottom:1px solid #eee;padding-bottom:12px;}
.form-group{margin-bottom:16px;}
.form-group label{display:block;font-size:14px;color:#555;margin-bottom:6px;font-weight:bold;}
.form-group input{width:100%;padding:12px;border-radius:10px;border:1px solid #ddd;font-size:14px;}
.form-group input:focus{outline:none;border-color:#ff7300;}
.toggle-row{display:flex;justify-content:space-between;align-items:center;padding:14px 0;border-bottom:1px solid #f0f0f0;}
.toggle-row span{font-size:14px;color:#333;}
.toggle{width:44px;height:24px;background:#ff7300;border-radius:12px;position:relative;cursor:pointer;}
.toggle::after{content:'';position:absolute;width:18px;height:18px;background:white;border-radius:50%;top:3px;right:3px;}
.btn-save{background:#ff7300;color:white;border:none;padding:12px 32px;border-radius:12px;font-size:15px;cursor:pointer;margin-top:8px;}
.btn-danger{background:#ffebee;color:#c62828;border:none;padding:12px 32px;border-radius:12px;font-size:15px;cursor:pointer;}
</style>
<div class="page">
    <div class="title">Pengaturan</div>
    <div class="card">
        <h3>👤 Profil Saya</h3>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" value="Admin">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" value="admin@hoopbook.com">
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" placeholder="+62 ...">
        </div>
        <button class="btn-save">Simpan Perubahan</button>
    </div>
    <div class="card">
        <h3>🔔 Notifikasi</h3>
        <div class="toggle-row">
            <span>Notifikasi Booking</span>
            <div class="toggle"></div>
        </div>
        <div class="toggle-row">
            <span>Notifikasi Promo</span>
            <div class="toggle"></div>
        </div>
        <div class="toggle-row">
            <span>Notifikasi Pesan</span>
            <div class="toggle"></div>
        </div>
    </div>
    <div class="card">
        <h3>🔒 Keamanan</h3>
        <div class="form-group">
            <label>Password Lama</label>
            <input type="password" placeholder="••••••••">
        </div>
        <div class="form-group">
            <label>Password Baru</label>
            <input type="password" placeholder="••••••••">
        </div>
        <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" placeholder="••••••••">
        </div>
        <button class="btn-save">Ubah Password</button>
        &nbsp;
        <button class="btn-danger">Hapus Akun</button>
    </div>
</div>
@endsection