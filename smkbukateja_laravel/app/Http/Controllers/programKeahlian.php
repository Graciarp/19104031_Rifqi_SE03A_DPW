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

    public function galery_json($id)
    {
        $programKeahlian = programKeahlianModel::find($id);
        $data = [];
        $data_sementara = json_decode($programKeahlian->galeri, true);

        if ($programKeahlian->galeri) {
            foreach ($data_sementara as $value) {
                array_push($data, url('img/program_keahlian/galeri') . '/' . $value);
            }
        }
            
        return response()->json(['data' => $data]);
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

        if ($request->hasFile('yang_dipelajari_img')) {
            // Mengambil file
            $file2 = $request->file('yang_dipelajari_img');
            $path2 = public_path("img/program_keahlian/materi/");

            // Buat direktori jika belum ada
            if (!is_dir($path2)) {
                mkdir($path2, 0777, true);
            }

            // Membuat nama file random
            $filename2 = Str::random(40) . '.' . $file2->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file2->move($path2, $filename2);

            // Simpan nama file ke database
            $data->yang_dipelajari_img = $filename2;
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

        if ($request->hasFile('yang_dipelajari_img')) {
            // Mengambil file
            $file2 = $request->file('yang_dipelajari_img');
            $path2 = public_path("img/program_keahlian/materi/");

            // Buat direktori jika belum ada
            if (!is_dir($path2)) {
                mkdir($path2, 0777, true);
            }

            // Membuat nama file random
            $filename2 = Str::random(40) . '.' . $file2->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file2->move($path2, $filename2);

            // Simpan nama file ke database
            $data->yang_dipelajari_img = $filename2;
        } else {
            $data->yang_dipelajari_img = $data->yang_dipelajari_img;
        }

        $data->update();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }

    public function lihat_detail($id)
    {
        $data = programKeahlianModel::find($id);
        return view('programKeahlianDetail')
            ->with('data', $data);
        ;
    }

    public function galery_save(Request $request, $id)
    {
        $data = programKeahlianModel::find($id);

        // Jika file gambar diisi
        if ($request->hasFile('gambar')) {

            // Mengambil file
            $file = $request->file('gambar');
            $path = public_path("img/program_keahlian/galeri/");

            // Buat direktori jika belum ada
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            // Membuat nama file random
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Pindahkan file ke folder img/prestasi
            $file->move($path, $filename);

            $galeri = $data->galeri;
            $galeri_array = [];

            if (empty($galeri)) {
                array_push($galeri_array, $filename);
            } else {
                $galeri_array = json_decode($galeri, true);
                array_push($galeri_array, $filename);
            }

            // Simpan nama file ke database
            $data->galeri = json_encode($galeri_array);
        }

        $data->update();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }

    public function galery_hapus($id, $index)
    {
        $data = programKeahlianModel::find($id);

        $galeri = json_decode($data->galeri, true);

        if (count($galeri) <= 1) {
            return redirect() -> back() -> with('warning', 'Galeri minimal harus ada 1 gambar');
        }

        unset($galeri[$index]);
        $data->galeri = json_encode($galeri);
        $data->update();

        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }
}
