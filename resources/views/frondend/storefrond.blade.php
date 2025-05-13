<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Library</title>


    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-[#fefae0] text-gray-800">
    <!-- Navbar -->
    <nav class="bg-[#1e3a8a] p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold tracking-wide">📘 E-Library</a>
            <ul class="flex space-x-6 text-white">
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

    {{-- isi halaman store --}}
    <div class="container mx-auto px-6 py-12">
        <h1 class=" text-3xl font-bold text-center mb-8 text-gray-800">Lokasi Toko Perpustakan</h1>
        <div class="grid md:grid-cols-3 gap-6">
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Jakarta</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Jakarta</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Bandung</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Bandung</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Depok</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Depok</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Bogor</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Bogor</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Tangerang</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Tangerang</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
            <div class=" bg-white shadow-lg rounded-lg p-6">
                <h2 class=" text-xl font-semibold text-gray-700">Perpustakan Malang</h2>
                <p class="text-gray-500 mt-2">Jl. Sudirman No. 10, Malang</p>
                <p class="text-gray-500">Jam Operasional: Senin - Jumat, 08.00 - 16.00</p>
            </div>
        </div>
    </div>
</body>
</html>