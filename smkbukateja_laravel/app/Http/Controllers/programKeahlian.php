<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\programKeahlian as programKeahlianModel;

class programKeahlian extends Controller
{

    public function json($id)
    {
        $programKeahlian = programKeahlianModel::find($id);
        return response()->json(['data' => $programKeahlian]);
    }

    public function save(Request $request)
    {
        $data = new programKeahlianModel;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/program_keahlian/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $data->image = $filename;
        }

        $data->save();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $data = programKeahlianModel::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/program_keahlian/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            // Simpan nama file ke database
            $data->image = $filename;
        } else {
            $data->image = $data->image;
        }

        $data->update();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }
}
