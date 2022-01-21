<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimoni as testiModel;
use Illuminate\Support\Str;

class testimoni extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimoni.index')
            ->with('testimoni', testiModel::all());
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menuju view testiBuat
        return view('admin.testimoni.testiBuat');
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
        $testimoni = new testiModel;
        $testimoni->nama = $request->nama;
        $testimoni->posisi = $request->posisi;
        $testimoni->teks = $request->caption;
        // $testimoni->slug = Str::slug($request->judul);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $testimoni->foto = $filename;
        }

        // Simpan data ke database
        $testimoni->save();

        return redirect() -> route('home') -> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.testimoni.testiEdit')
            -> with('testimoni', testiModel::find($id));
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
        $testimoni = testiModel::find($id);
        $testimoni->nama = $request->nama;
        $testimoni->posisi = $request->posisi;
        $testimoni->teks = $request->caption;
        // $testimoni->slug = Str::slug($request->nama);


        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/testimoni
            $file->move($path, $filename);

            // Simpan nama file ke database
            $testimoni->foto = $filename;
        } else {
            $testimoni->foto = $testimoni->foto;
        }

        // Simpan data ke database
        $testimoni->save();

        return redirect() -> route('home') -> with('success', 'Data berhasil diubah');

    }

    public function destroy($id)
    {
        $testimoni = testiModel::find($id);
        $testimoni->delete();

        return redirect() -> route('home') -> with('success', 'Data berhasil dihapus');
    }
}

