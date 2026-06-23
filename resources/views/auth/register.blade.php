<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - HoopBook</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:'Segoe UI';
background:linear-gradient(135deg,#0f5c4e,#1db389);
}

.card{
width:350px;
background:#1db389;
padding:40px;
border-radius:24px;
}

input{
width:100%;
padding:12px;
margin-bottom:12px;
border:none;
border-radius:50px;
}

button{
width:100%;
padding:12px;
border:none;
border-radius:50px;
background:white;
font-weight:bold;
cursor:pointer;
}

a{
color:white;
text-decoration:none;
}

.text{
color:white;
text-align:center;
margin-top:15px;
}
</style>

</head>

<body>

<div class="card">

<form method="POST" action="{{ route('register') }}">
@csrf

<input
type="text"
name="name"
placeholder="Nama"
required
>

<input
type="email"
name="email"
placeholder="Email"
required
>

<input
type="password"
name="password"
placeholder="Password"
required
>

<input
type="password"
name="password_confirmation"
placeholder="Konfirmasi Password"
required
>

<button type="submit">
DAFTAR
</button>

</form>

<div class="text">
Sudah punya akun?
<a href="{{ route('login') }}">
Login
</a>
</div>

</div>

</body>
</html>