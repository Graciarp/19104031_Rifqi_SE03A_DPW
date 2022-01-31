<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ekstrakurikuler, kegiatanEkstra};
use Illuminate\Support\Str;

class KegiatanEkstraController extends Controller
{
    public function edit($id)
    {
        return view('admin.kegiatanekstra.index')
            ->with('data', ekstrakurikuler::find($id))
            ->with('kegiatan', kegiatanEkstra::where('id_ekstra', $id)->get());
            ;
        ;
    }

    public function save(Request $request, $id)
    {
        $data = new kegiatanEkstra();
        $data->id_ekstra = $id;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/kegiatanekstra/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $data->gambar = $filename;
        }

        $data->save();
        return redirect() -> back() -> with('success', 'Data berhasil ditambahkan');
    }
}
