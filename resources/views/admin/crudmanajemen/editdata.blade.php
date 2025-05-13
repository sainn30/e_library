<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-10 max-w-7xl m-6">
        <div class="m-6">
            <form action="{{ route('manajemen.update', $manajemen->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-4">
                    <label for="" class="block font-bold">Judul Buku</label>
                    <input type="text" name="judulbuku" value="{{ $manajemen->judulbuku }}" class=" w-full border p-2">
                </div>
                
                <div class="mb-4">
                    <label for="" class="block font-bold">Deskripsi</label>
                    <textarea name="deskripsi"  class=" w-full border p-2">{{ $manajemen->deskripsi }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="" class="block font-bold">Kode Buku</label>
                    <input type="text" name="kodebuku" value="{{ $manajemen->detailmanajemen->kodebuku }}" class=" w-full border p-2">
                </div>

                <div class="mb-4">
                    <label for="" class="block font-bold">Penulis</label>
                    <input type="text" name="penulis" value="{{ $manajemen->detailmanajemen->penulis }}" class=" w-full border p-2">
                </div>

                <div class="mb-4">
                    <label for="" class="block font-bold">Penerbit</label>
                    <input type="text" name="penerbit" value="{{ $manajemen->detailmanajemen->penerbit }}" class=" w-full border p-2">
                </div>

                <div class="mb-4">
                    <label for="" class="block font-bold">Tahun Terbit</label>
                    <input type="text" name="tahunterbit" value="{{ $manajemen->detailmanajemen->tahun_terbit }}" class=" w-full border p-2">
                </div>

                <div class="mb-4">
                    <label for="" class="block font-bold">Gambar Buku</label>
                    <input type="file" name="image" class="w-full border p-2">
                    <img src="{{ asset('storage/products/' . $manajemen->gambarbuku) }}" alt="" class="w-40 h-40 mt-2">
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('manajemen.index') }}" class="bg-green-500 text-white py-2 px-6 rounded-lg">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>