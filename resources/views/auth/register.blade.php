<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-orange-50 to-blue-50 min-h-screen flex items-center justify-center p-4">

<div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden">
    <div class="bg-gradient-to-r from-orange-500 to-red-500 p-6 text-center">
        <img src="{{ asset('images/instiki.png') }}" alt="INSTIKI" class="w-24 h-auto mx-auto mb-3 bg-white rounded-xl p-2">
        <h1 class="text-xl font-bold text-white">Daftar Akun Baru</h1>
        <p class="text-orange-100 text-xs mt-1">Sistem Booking Lapangan INSTIKI</p>
    </div>

    <div class="p-8">
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-user mr-2 text-orange-500"></i>Nama Lengkap
                </label>
                <input type="text" name="name" value="{{ old('name') }}" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Nama lengkap">
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-envelope mr-2 text-orange-500"></i>Email
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="nama@email.com">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-lock mr-2 text-orange-500"></i>Password
                </label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Minimal 8 karakter">
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-lock mr-2 text-orange-500"></i>Konfirmasi Password
                </label>
                <input type="password" name="password_confirmation" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500"
                    placeholder="Ulangi password">
            </div>

            <button type="submit" 
                class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-3 rounded-xl hover:from-orange-600 hover:to-red-600 transition-all shadow-lg">
                <i class="fa-solid fa-user-plus mr-2"></i>Daftar
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">
            Sudah punya akun? 
            <a href="{{ route('login') }}" class="text-orange-500 hover:text-orange-600 font-bold">Login di sini</a>
        </p>
    </div>
</div>

</body>
</html>