<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\informasiModel;

class informasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index')
        ->with('data', informasiModel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.artikelBuat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Buat data baru dengan membuat inisialisasi baru
        $informasi = new informasiModel;
        $informasi->judul = $request->judul;
        $informasi->isi = $request->isi;
        $informasi->slug = Str::slug($request->judul);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/artikel/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/artikel
            $file->move($path, $filename);

            // Simpan nama file ke database
            $informasi->gambar = $filename;
        }

        // Simpan data ke database
        $informasi->save();

        // Redirect ke halaman home
        return redirect() -> route('home') -> with('success', 'Artikel berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return redirect() -> route('informasi.baca', ['slug' => $slug]); // Redirect ke halaman baca artikel
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.berita.artikelEdit')

        // Menampilkan data berdasarkan id
        ->with('informasi', informasiModel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // cari data berdasarkan id
        $informasi = informasiModel::find($id);
        $informasi->judul = $request->judul;
        $informasi->isi = $request->isi;
        $informasi->slug = Str::slug($request->judul);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/artikel/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/artikel
            $file->move($path, $filename);

            // Simpan nama file ke database
            $informasi->gambar = $filename;
        } else {
            $informasi->gambar = $informasi->gambar;
        }

        // Simpan data ke database
        $informasi->save();

        // Redirect ke halaman home
        return redirect() -> route('home') -> with('success', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus data berdasarkan id
        $informasi = informasiModel::find($id);
        $informasi->delete();

        // Redirect ke halaman home
        return redirect() -> route('home') -> with('success', 'Artikel berhasil dihapus');
    }
}
