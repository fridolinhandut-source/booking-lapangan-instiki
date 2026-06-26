<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorit - HoopBook</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
<div class="flex min-h-screen">
    @include('layouts.sidebar')
    <main class="flex-1 ml-64 p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Favorit</h1>
        <div class="bg-white rounded-2xl p-8 text-center">
            <i class="fa-solid fa-heart text-6xl text-gray-300 mb-4"></i>
            <h2 class="text-xl font-bold text-gray-900 mb-2">Lapangan Favorit</h2>
            <p class="text-gray-500">Lapangan basket favorit Anda akan muncul di sini.</p>
        </div>
    </main>
</div>
</body>
</html>