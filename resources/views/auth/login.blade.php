<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INSTIKI Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-orange-50 to-blue-50 min-h-screen flex items-center justify-center p-4">

<div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden">
    <!-- Logo Header -->
    <div class="bg-gradient-to-r from-orange-500 to-red-500 p-8 text-center">
        <img src="{{ asset('images/instiki.png') }}" alt="INSTIKI" class="w-32 h-auto mx-auto mb-4 bg-white rounded-xl p-3">
        <h1 class="text-2xl font-bold text-white">Selamat Datang</h1>
        <p class="text-orange-100 text-sm mt-1">Sistem Booking Lapangan</p>
    </div>

    <!-- Form Login -->
    <div class="p-8">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-envelope mr-2 text-orange-500"></i>Email
                </label>
                <input type="email" name="email" value="{{ old('email') }}" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="nama@email.com">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    <i class="fa-solid fa-lock mr-2 text-orange-500"></i>Password
                </label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                    placeholder="••••••••">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-orange-500 rounded focus:ring-orange-500">
                    <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                </label>
                <a href="#" class="text-sm text-orange-500 hover:text-orange-600 font-medium">Lupa password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white font-bold py-4 rounded-xl hover:from-orange-600 hover:to-red-600 transition-all transform hover:scale-105 shadow-lg">
                <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
            </button>
        </form>

        <!-- Divider -->
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Atau</span>
            </div>
        </div>

        <!-- Register Link -->
        <p class="text-center text-sm text-gray-600">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-orange-500 hover:text-orange-600 font-bold">Daftar sekarang</a>
        </p>
    </div>

    <!-- Footer -->
    <div class="bg-gray-50 px-8 py-4 text-center border-t border-gray-200">
        <p class="text-xs text-gray-500">© 2024 INSTIKI - Institut Bisnis dan Teknologi Indonesia</p>
    </div>
</div>

</body>
</html>