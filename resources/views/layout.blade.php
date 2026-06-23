<!DOCTYPE html>
<html>
<head>
<title>HoopBook</title>
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:Arial; }
body { display:flex; background:#F5F6FA; }

.sidebar {
    position:fixed; left:0; top:0;
    width:220px; height:100vh;
    background:#071733; padding:20px;
    overflow:auto; display:flex;
    flex-direction:column;
}

.logo { color:white; font-size:22px; font-weight:bold; margin-bottom:30px; }

.sidebar a {
    display:block; padding:12px 15px;
    margin-bottom:5px; color:white;
    text-decoration:none; border-radius:10px;
    font-size:14px;
}

.sidebar a:hover, .sidebar a.active { background:#ff7300; }

.logout-btn {
    margin-top:auto; width:100%;
    padding:12px 15px; background:none;
    color:#ff4444; border:1px solid #ff4444;
    border-radius:10px; cursor:pointer;
    font-size:14px; text-align:left;
}
.logout-btn:hover { background:#ff4444; color:white; }

.content { margin-left:220px; padding:30px; flex:1; }
</style>
</head>
<body>

<div class="sidebar">
    <div class="logo">🏀 HoopBook</div>

    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Dashboard</a>
    <a href="/cari-lapangan" class="{{ request()->is('cari-lapangan') ? 'active' : '' }}">Cari Lapangan</a>
    <a href="/booking-saya" class="{{ request()->is('booking-saya') ? 'active' : '' }}">Booking Saya</a>
    <a href="/kalender" class="{{ request()->is('kalender') ? 'active' : '' }}">Kalender</a>
    <a href="/pembayaran" class="{{ request()->is('pembayaran') ? 'active' : '' }}">Pembayaran</a>
    <a href="/promo" class="{{ request()->is('promo') ? 'active' : '' }}">Promo</a>
    <a href="/favorit" class="{{ request()->is('favorit') ? 'active' : '' }}">Favorit</a>
    <a href="/ulasan" class="{{ request()->is('ulasan') ? 'active' : '' }}">Ulasan</a>
    <a href="/pesan" class="{{ request()->is('pesan') ? 'active' : '' }}">Pesan</a>
    <a href="/pengaturan" class="{{ request()->is('pengaturan') ? 'active' : '' }}">Pengaturan</a>
    <a href="/bantuan" class="{{ request()->is('bantuan') ? 'active' : '' }}">Bantuan</a>

    <form method="POST" action="{{ route('logout') }}" style="margin-top:auto;">
        @csrf
        <button type="submit" class="logout-btn">🚪 Log Out</button>
    </form>
</div>

<div class="content">
    @yield('content')
</div>

</body>
</html>