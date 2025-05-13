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

    {{-- isi halaman book --}}
    <div class="p-6 bg-gray-100 min-h-screen">
        <div class="overflow-x-auto bg-white rounded-2xl shadow-md">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th scope="col" class="px-6 py-4">No</th>
                        <th scope="col" class="px-6 py-4">Gambar</th>
                        <th scope="col" class="px-6 py-4">Nama Buku</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($books as $book)
                        <tr class="hover:bg-indigo-50 transition">
                            <td class="px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="Gambar Buku" class="w-12 h-16 object-cover rounded-md">
                            </td>
                            <td class="px-6 py-4">{{ $book->judulbuku }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>