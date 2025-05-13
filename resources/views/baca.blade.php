<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Baca E-book Disini') }}
        </h2>
    </x-slot>

        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
            <h1 class="text-2xl font-bold mb-4 text-center"> {{ $books->judulbuku }}</h1>
            <div class="flex justify-center">
                <img src="{{ asset('storage/products/' . $books->gambarbuku) }}" alt="buku" class="w-96 h-[30rem] object-cover rounded items-center">
            </div>
            <p class="mt-4 text-lg font-bold">Deskripsi :</p>
            <p class="italic text-gray-700 p-2 font-bold">{{ $books->deskripsi }}</p>

            <!-- Books Details Table -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mb-2">Books details:</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <tr class="bg-gray-100">
                        <td class="p-2 font-semibold">Judul Buku</td>
                        <td class="p-2">{{ $books->judulbuku }}</td>
                    </tr>
                    <tr>
                        <td class="p-2 font-semibold">Penulis</td>
                        <td class="p-2 text-orange-600 font-bold">{{ $books->detailmanajemen->penulis }}</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="p-2 font-semibold">Penerbit</td>
                        <td class="p-2">{{ $books->detailmanajemen->penerbit }}</td>
                    </tr>
                    <tr>
                        <td class="p-2 font-semibold">Tahun Terbit</td>
                        <td class="p-2">{{ $books->detailmanajemen->tahun_terbit }}</td>
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

            <!-- Books Synopsis -->
            <div class="mt-6">
                <h2 class="text-lg font-bold mb-2">Isi Buku:</h2>
                <p class="text-gray-700 text-justify">
                    Akhirnya buku baru Tere di tahun 2018, keluar juga, Alhamdulillah.
                    Novel PERGI merupakan sekuel dari novel PULANG (2015). Membuka lembar pertama tentu saja tertulis judul novel dan penulis. Tapi sebelum lanjut ke halaman berikutnya, saya sempat berpikir, kok ada Co-author : Sarippudin ? Siapakah dia? (Jangan harap ada keterangan di lembar terakhir tentang sosok penulis, karena buku-bukunya Tere Liye memang tidak pernah mencantumkannya). Seingat saya, dari puluhan buku yang ditulis Tere Liye, baru kali ini ada Co-Author. Entah saya yang baru ngeh, atau memang demikian adanya. Baiklah, yang bisa menjawab pertanyaan saya hanya Bang Tere Liye. Mari membahas buku yang sudah selesai saya baca.
                    Buku ini ber-genre action,dan menurut saya seru sekali! Mulai halaman pertama disuguhkan dengan berbagai aksi, kisah yang tak terduga. Ibarat lagi ikutan lomba lari, rasanya ingin cepat sampai finish, saking serunya Karakter-karakter di buku pergi, beberapa masih sama seperti di novel pulang, yaitu Bujang, Salonga, si kembar Kiko dan Yuki, serta White, Master Dragon. Tentu saja banyak karakter baru bermunculant, menambah semarak fiksi ini. Setting ceritanya di Mexico, Indonesia, Singapura, Jepang (kota Tokyo), Rusia (kota Moscow), Spanyol (kota Madrid), Makau, Hong Kong. Buku pergi terdiri dari 31 bab + epilog, yang benar-benar bikin greget!

                    Cerita-nya tentang Bujang alias Si Babi Hutan, alias Agam yang kini menjadi Tauke Besar menggantikan Tauke Besar Lama yang sudah meninggal (ceritanya di Novel Pulang) di Keluarga Tong. Setelah Tauke Besar meninggal, Bujang meneruskan kepemimpinan ayah angkatnya tersebut dalam Keluarga Tong. Kali ini Bujang harus berhadapan dengan Master Dragon, pimpinan tertinggi dari 8 keluarga penguasa shadow economy. (Tentang shadow economy bisa dibaca halaman 38 -40).
                    
                    Baca juga: urutan serial aksi
                    
                     Ada delapan keluarga penguasa shadow economy di Asia Pasifik. Mereka adalah:
                    
                    Keluarga Tong,
                    Keluarga Lin di Makau,
                    El Pacho di Meksiko,
                    Keluarga J.J. Costello di Miami Florida – tidak peduli dengan keluarga lain, fokus pada bisnis mereka, bersikap netral,
                    Keluarga Yamaguchi di Tokyo,
                    Keluarga Wong di Beijing, besan Master Dragon
                    Bratva di Moskow,
                    Master Dragon di Hong Kong. Pimpinan tunggal dari delapan keluarga.
                    
                </p> 
            </div>

            {{-- Tombol kembali --}}
            @if (Auth::user()->usertype==='admin')
                <a href="{{ route('admin.dashboard') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 transition rounded-lg shadow duration-300 ease-in-out mt-5">Kembali</a> 
            @else
                <a href="{{ route('dashboard') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 transition rounded-lg shadow duration-300 ease-in-out mt-5">Kembali</a> 
            @endif
        </div>
    
</x-app-layout>