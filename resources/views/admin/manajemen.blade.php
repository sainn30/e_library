<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h1 class="text-center text-3xl">{{ __('Halaman Manajemen Buku') }}</h1>
        </h2>
    </x-slot>

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center mb-10">E-Library</h1>

        

        {{-- Grid buku --}}
        <div id="bookList" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 m-4">
            @foreach ($books as $book)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="buku" class="w-full h-[30rem] object-cover rounded">
                    <h3 class="text-lg font-bold mt-3">{{ $book->judulbuku }}</h3>
                    <p class=" text-center">"Orang yang tidak membaca buku tidak lebih baik dari orang yang tidak bisa membaca."</p>
                    <div class="flex justify-center gap-4 mt-5">
                        <a href="{{ route('manajemen.show', $book->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">
                            Detail  
                        </a>
                        <a href="{{ route('manajemen.edit', $book->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg">
                            Edit
                        </a>
                        <form action="{{ route('manajemen.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition">
                                Hapus
                            </button>
                        </form>
                    </div>  
                </div>
            @endforeach
        </div>

        {{-- Tombol Tambah data --}}
        <div class="mt-10 text-center">
            <a href="{{ route('manajemen.create') }}" class="bg-sky-500 text-white px-6 py-2 rounded-lg hover:bg-sky-600">
                Tambah Data
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                timer : 2000
            });
        @elseif (session('error'))
        Swal.fire({
                icon: "error",
                title: "GAGAL",
                text: "{{ session('error') }}",
                showConfirmButton : false,
                timer : 2000
            });
        @endif
    </script>
</x-app-layout>