<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Buku</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    </head>
    <body class="bg-gray-100 p-10">
        <div class=" max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Tambah Buku</h2>

            <form action="{{ route('manajemen.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="mb-3">
                    <label for="" class="block font-medium">Judul Buku</label>
                    <input type="text" name="judulbuku" class="w-full border p-2 rounded">

                    @error('judulbuku')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Deskripsi</label>
                    <textarea rows="8" type="text" name="deskripsi" class="w-full border p-2 rounded"></textarea>

                    @error('deskripsi')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Kode Buku</label>
                    <input type="text" name="kodebuku" class="w-full border p-2 rounded">

                    @error('kodebuku')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Penulis</label>
                    <input type="text" name="penulis" class="w-full border p-2 rounded">

                    @error('penulis')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Penerbit</label>
                    <input type="text" name="penerbit" class="w-full border p-2 rounded">

                    @error('penerbit')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Tahun Terbit</label>
                    <input type="number" name="tahunterbit" class="w-full border p-2 rounded">

                    @error('tahunterbit')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="block font-medium">Gambar Buku</label>
                    <input type="file" name="image" class="w-full border p-2 rounded">

                    @error('gambarbuku')
                        <div class="bg-red-500 text-white text-center rounded-md shadow-md mt-2">
                            <h2>{{ $message }}</h2>
                        </div>
                    @enderror
                </div>

                <button class=" w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Tambah Buku</button>
                <a href="{{ route('manajemen.index') }}" class=" w-full bg-green-500 text-white py-2 rounded hover:bg-green-600 block text-center">Kembali</a>
            </form>
        </div>
    </body>
</html>