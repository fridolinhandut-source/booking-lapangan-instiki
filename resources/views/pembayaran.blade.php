@extends('layout')

@section('content')

<style>

.page{
padding:40px;
display:flex;
justify-content:center;
}

.card{
width:520px;
background:white;
padding:30px;
border-radius:25px;
box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.title{
font-size:38px;
font-weight:bold;
margin-bottom:25px;
}

.box{
border:1px solid #eee;
padding:20px;
border-radius:15px;
margin-bottom:20px;
}

.total{
width:100%;
border:none;
outline:none;
font-size:55px;
font-weight:bold;
}

.input{
width:100%;
padding:14px;
border-radius:12px;
border:1px solid #ddd;
}

.method{

display:flex;

justify-content:space-between;

align-items:center;

padding:18px;

border:1px solid #ddd;

border-radius:15px;

margin-bottom:12px;

cursor:pointer;

}

.method.active{

border:2px solid #ff7300;

background:#fff4ea;

}

.circle{

width:20px;

height:20px;

border-radius:50%;

border:2px solid #bbb;

}

.method.active .circle{

background:#ff7300;

border:#ff7300;

}

.pay{

width:100%;

padding:18px;

border:none;

background:#ff7300;

color:white;

border-radius:14px;

font-size:18px;

cursor:pointer;

}

.modal{

display:none;

position:fixed;

left:0;

top:0;

width:100%;

height:100%;

background:rgba(0,0,0,.5);

justify-content:center;

align-items:center;

}

.success{

width:430px;

background:white;

padding:35px;

border-radius:25px;

text-align:center;

}

.check{

width:150px;

height:150px;

background:#22c55e;

border-radius:50%;

margin:auto;

display:flex;

justify-content:center;

align-items:center;

font-size:90px;

color:white;

}

.detail{

margin-top:20px;

padding:20px;

border:1px solid rgba(247, 172, 12, 0.9);

border-radius:15px;

text-align:left;

}

.gray{

margin-top:15px;

background:#eee;

color:#333;

}

</style>



<div class="page">

<div class="card">

<div class="title">

Pembayaran

</div>


<div class="box">

Total Pembayaran

<input

id="total"

class="total"

type="text"

value="500000"

oninput="rupiah()"

>

</div>


Nama Lapangan

<input
id="lapangan"
class="input"
value="Giant Arena Court"
>

<br><br>

Tanggal

<input
id="tanggal"
class="input"
type="date"
>

<br><br>

Jam

<input
id="jam"
class="input"
type="time"
>

<br><br>

<h3>Metode Pembayaran</h3>

<br>


<div class="method active">

<span>🏦 Transfer Bank</span>

<div class="circle"></div>

</div>


<div class="method">

<span>📱 E-Wallet</span>

<div class="circle"></div>

</div>


<div class="method">

<span>💳 Kartu Debit</span>

<div class="circle"></div>

</div>


<div class="method">

<span>🏧 Virtual Account</span>

<div class="circle"></div>

</div>


<div class="method">

<span>📷 QRIS</span>

<div class="circle"></div>

</div>


<div class="method">

<span>💵 Tunai</span>

<div class="circle"></div>

</div>


<br>

<button
class="pay"
onclick="bayar()"
>

Bayar Sekarang

</button>

</div>

</div>




<div
class="modal"
id="popup"
>

<div class="success">

<div class="check">

✓

</div>

<br>

<h2>

Pembayaran Berhasil

</h2>

<br>

Booking berhasil dikonfirmasi


<div class="detail">

🏀
<div id="showLapangan"></div>

<br>

📅
<div id="showTanggal"></div>

<br>

🕓
<div id="showJam"></div>

<br>

💳
<div id="showMetode"></div>

<br>

💰
<div id="showTotal"></div>

</div>


<br>

<button

class="pay"

onclick="
window.location=
'/booking-saya'
"

>

Lihat Booking Saya

</button>


<button

class="pay gray"

onclick="
tutup()
"

>

Kembali

</button>

</div>

</div>



<script>

function rupiah(){

let v=

document
.getElementById(
"total"
)
.value

v=
v.replace(
/[^0-9]/g,
"")

let f=

new Intl
.NumberFormat(
"id-ID"
)
.format(v)

document
.getElementById(
"total"
)
.value=f

}

rupiah()



let metode=
"🏦 Transfer Bank"

document
.querySelectorAll(
".method"
)

.forEach(

item=>{

item.onclick=()=>{

document
.querySelectorAll(
".method"
)

.forEach(
x=>
x.classList.remove(
"active"
)
)

item.classList.add(
"active"
)

metode=
item.innerText

}

}

)



function bayar(){

showLapangan.innerHTML=
lapangan.value

showTanggal.innerHTML=
tanggal.value

showJam.innerHTML=
jam.value

showMetode.innerHTML=
metode

showTotal.innerHTML=
"Rp "+total.value

popup.style.display=
"flex"

}



function tutup(){

popup.style.display=
"none"

}

</script>

@endsection