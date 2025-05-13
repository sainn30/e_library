<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Buku') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 flex flex-col md:flex-row md:items-start gap-6">

                <!-- Gambar Buku -->
                <div class="md:w-1/3 w-full flex justify-center md:justify-start">
                    @if ($detail->gambarbuku)
                        <img src="{{ asset('storage/products/' . $detail->gambarbuku) }}" alt="Gambar Buku" class="w-48 h-[20rem] rounded-lg shadow-md">
                    @else
                        <img src="{{ asset('storage/default.jpg') }}" alt="Gambar Default" class="w-48 h-48 rounded-lg shadow-md">
                    @endif
                </div>

                <!-- Detail Buku -->
                <div class="mt-6">
                    <h2 class="text-lg font-bold mb-2">Book details:</h2>
                    <table class="w-full border-collapse border border-gray-300">
                        <tr class="bg-gray-100">
                            <td class="p-2 font-semibold">Judul Buku</td>
                            <td class="p-2">{{ $detail->judulbuku }}</td>
                        </tr>
                        <tr>
                            <td class="p-2 font-semibold">Penulis</td>
                            <td class="p-2 font-bold">{{ $detail->detailmanajemen->penulis }}</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-2 font-semibold">Penerbit</td>
                            <td class="p-2">{{ $detail->detailmanajemen->penerbit }}</td>
                        </tr>
                        <tr>
                            <td class="p-2 font-semibold">Tahun Terbit</td>
                            <td class="p-2">{{ $detail->detailmanajemen->tahun_terbit }}</td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="p-2 font-semibold">Halaman</td>
                            <td class="p-2">400 Halaman</td>
                        </tr>
                        <tr>
                            <td class="p-2 font-semibold">Kategori</td>
                            <td class="p-2">Novel</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <a href="{{ route('manajemen.index') }}" class="bg-green-500 text-white text-center py-2 px-6 hover:bg-green-600 transition rounded-lg mt-6 ml-6">Kembali</a>
</x-app-layout>
