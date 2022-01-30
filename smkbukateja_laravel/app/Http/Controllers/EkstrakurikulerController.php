<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    public function json($id)
    {
        $ekstra = ekstrakurikuler::find($id);
        return response()->json(['data' => $ekstra]);
    }

    public function save(Request $request)
    {
        $data = new ekstrakurikuler;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/ekstrakurikuler/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/ekstrakurikuler
            $file->move($path, $filename);

            // Simpan nama file ke database
            $data->image = $filename;
        }

        $data->save();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $data = ekstrakurikuler::find($id);
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {
            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/ekstrakurikuler/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/ekstrakurikuler
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
