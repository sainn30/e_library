<?php

namespace App\Http\Controllers;

use App\Models\DetailManajemen;
use App\Models\Manajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('admin.manajemen', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crudmanajemen.createdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulbuku'   => 'required',
            'deskripsi'   => 'required',
            'kodebuku'    => 'required',
            'penulis'     => 'required',
            'penerbit'    => 'required',
            'tahunterbit' => 'required|digits:4|integer',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], 
        [
            'judulbuku.required'   => 'Judul Buku Wajib Diisi!!',
            'deskripsi.required'   => 'Deskripsi Wajib Diisi!!',
            'kodebuku.required'    => 'Kode Buku Wajib Diisi!!',
            'penulis.required'     => 'Penulis Wajib Diisi!!',
            'Penerbit.required'    =>  'Penerbit Wajib Diisi!!',
            'tahunterbit.required' => 'Tahun Terbit Wajib Diisi!!',
            'tahunterbit.digits'   => 'Tahun Tebit Hanya Boleh 4 Digit',
            'tahunterbit.integer'  => 'Tahun Terbit Hanya Boleh Menggunakan Nomor',
            'image.required'       => 'Gambar Wajib Diisi!!',
            'image.image'          => 'File Yang Di Upload Harus Gambar',
            'image.mimes'          => 'Format Gambar Yang Diizinkan Adalah jpeg png jpg',
            'image.max'            => 'Ukuran Gambar Tidak Boleh Lebih dari 2048'
        ]);

        // uploud image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        $manajemen = Manajemen::create([
            'judulbuku'   => $request->judulbuku,
            'gambarbuku'  => $image->hashName(),
            'deskripsi'   => $request->deskripsi,
        ]);

        DetailManajemen::create([
            'manajemen_id'  => $manajemen->id,
            'kodebuku'      => $request->kodebuku,
            'penulis'       => $request->penulis,
            'penerbit'      => $request->penerbit,
            'tahun_terbit'  => $request->tahunterbit
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // buat ngambil data nya di model
        $detail = Manajemen::with('detailmanajemen')->findOrFail($id);

        return view('admin.crudmanajemen.showdata', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manajemen = Manajemen::with('detailmanajemen')->findOrFail($id);

        return view('admin.crudmanajemen.editdata', compact('manajemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judulbuku'     => 'required',
            'deskripsi'     => 'required',
            'kodebuku'      => 'required',
            'penulis'       => 'required',
            'penerbit'      => 'required',
            'tahunterbit'   => 'required|digits:4|integer',
            'image'         => 'required|image|mimes:jpg,svg,jpeg,gif|max:2048'
        ]);

        // cari buku berdasarka id
        $manajemen = Manajemen::findOrFail($id);

        // cek jika ada gambar yang baru diuploud
        if ($request->hasFile('image')) {
            // hapus gambar lama
            Storage::delete('public/products/' . $manajemen->gambarbuku);

            // uploud gambar baru 
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            // Update data buku
            $manajemen->update([
                'gambarbuku'  => $image->hashName(),
                'judulbuku'   => $request->judulbuku,
                'deskripsi'   => $request->deskripsi,
            ]);
        }else {
            $manajemen->update([
                'judulbuku'  => $request->judulbuku,
                'deskripsi'  => $request->deskripsi,
            ]);
        }

        // update detail buku
        DetailManajemen::where('manajemen_id', $id)->update([
            'kodebuku'     =>  $request->kodebuku,
            'penulis'      => $request->penulis,
            'penerbit'     => $request->penerbit,
            'tahun_terbit' => $request->tahunterbit,
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Buku Berhasil Di Perbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari Buku Berdasarkan ID
        $manajemen = Manajemen::findOrFail($id);

        // Hapus gambar dari storage
        Storage::delete('public/products/' . $manajemen->gambarbuku);

        // Hapus data dari table manajemen
        $manajemen->delete();

        return redirect()->route('manajemen.index')->with('success', 'Data berhasil dihapus');
    }
}
