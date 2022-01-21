<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi as prestasiModel;
use Illuminate\Support\Str;

class prestasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.prestasi.index')
        ->with('prestasi', prestasiModel::all());
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menuju view prestasiBuat
        return view('admin.prestasi.prestasiBuat');
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
        $prestasi = new prestasiModel;
        $prestasi->judul = $request->judul;
        $prestasi->isi = $request->isi;
        // $prestasi->slug = Str::slug($request->judul);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/prestasi/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $prestasi->gambar = $filename;
        }

        // Simpan data ke database
        $prestasi->save();

        return redirect() -> route('home') -> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.prestasi.prestasiEdit')
            -> with('prestasi', prestasiModel::find($id));
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
        // Cari data berdasarkan id
        $prestasi = prestasiModel::find($id);
        $prestasi->judul = $request->judul;
        $prestasi->isi = $request->isi;
        // $prestasi->slug = Str::slug($request->judul);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/prestasi/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $prestasi->gambar = $filename;
        } else {
            $prestasi->gambar = $prestasi->gambar;
        }

        // Simpan data ke database
        $prestasi->save();

        return redirect() -> route('home') -> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = prestasiModel::find($id);
        $prestasi->delete();

        return redirect() -> route('home') -> with('success', 'Data berhasil dihapus');
    }
}
