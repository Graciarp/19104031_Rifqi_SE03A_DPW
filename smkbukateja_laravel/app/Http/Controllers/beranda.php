<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beranda as berandaModel;
use App\Models\programKeahlian as programKeahlianModel;
use App\Models\ekstrakurikuler;
use Illuminate\Support\Str;

class beranda extends Controller
{
    public function index()
    {
        // Memanggil file index
        return view('admin.beranda.index')
            ->with('beranda', berandaModel::all())
            ->with('programKeahlian', programKeahlianModel::all())
            ->with('ekstrakurikuler', ekstrakurikuler::all());
            ;
            ;
    }

    public function edit($id)
    {
        // Memanggil file editBeranda
        return view('admin.beranda.editBeranda')
            ->with('beranda', berandaModel::find($id));
    }

    public function update($id)
    {
        $data = berandaModel::find($id);

        if (
            $data->key == 'banner_beranda' and request() -> hasFile('value')
        ) {
            $beranda = $data->value;
            $beranda_array = [];
            
            $path_upload = public_path('img');
            $file = request()->file('value');
            $filename = Str::random() . '_' . $file->getClientOriginalName();
            $file->move($path_upload, $filename);

            if (empty($beranda)) {
                array_push($beranda_array, $filename);
            } else {
                $beranda_array = json_decode($beranda, true);
                array_push($beranda_array, $filename);
            }

            $data->value = json_encode($beranda_array);
        }

        if (
            $data->key == 'struktur_organisasi_sekolah' and request() -> hasFile('value')
        ) {
            
            $path_upload_struktur = public_path('img');
            $file_struktur = request()->file('value');
            $filename_struktur = Str::random() . '_' . $file_struktur->getClientOriginalName();
            $file_struktur->move($path_upload_struktur, $filename_struktur);
            $data->value = $filename_struktur;
        }

        if (
            $data->key == 'galeri_video_beranda'
        ) {
            $data_video = str_replace(" ", "", request()->value);
            $data_video = explode(",", $data_video);
            $data->value  = json_encode($data_video);
        }

        if (!in_array($data->key, ['banner_beranda', 'struktur_organisasi_sekolah', 'galeri_video_beranda'])) {
            $data->value=request('value');
        }

        $data->save();
        return redirect()->back() -> with('success', 'Data berhasil diubah');
    }

    public function hapus_gb_beranda($index)
    {
        $data = berandaModel::where('key', 'banner_beranda') -> first();
        $gambar = json_decode($data->value, true);

        if (count($gambar) <= 1) {
            return redirect() -> back() -> with('warning', 'Gambar tidak boleh kosong');
        }

        $urutan = $index - 1;

        unset($gambar[$urutan]);
        $gambar = array_values($gambar);

        $data->value = json_encode($gambar);
        $data->save();

        return redirect()->back() -> with('success', 'Data berhasil diubah');
    }
}
