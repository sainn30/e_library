<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'EB Garamond', serif;
        }
    </style>
</head>
<body class="bg-[#fefae0] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#1e3a8a] p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold tracking-wide">📘 E-Library</a>
            <ul class="flex space-x-6 text-white font-medium">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/book" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 hover:bg-green-600 rounded">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 hover:bg-gray-800 rounded">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Content / Hero -->
    <div class="container mx-auto px-6 py-16">
        <div class="flex flex-col md:flex-row items-center justify-between gap-10">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold leading-snug mb-6">
                    Selamat Datang di <span class="text-yellow-600">My E-Library</span>
                </h1>
                <p class="text-lg text-gray-700 mb-6">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar."
                </p>
                <a href="{{ route('login') }}"
                   class="inline-block px-6 py-3 bg-[#1e3a8a] hover:bg-blue-800 text-white rounded-lg shadow-md transition-all duration-200 ease-in-out">
                    📖 Baca Sekarang
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Books" class="w-64 h-64">
            </div>
        </div>
    </div>

</body>
</html>