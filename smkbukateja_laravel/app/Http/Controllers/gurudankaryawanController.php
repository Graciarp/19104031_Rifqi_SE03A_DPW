<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gurudankaryawan;

class gurudankaryawanController extends Controller
{
    public function index()
    {
        return view('admin.gurukaryawan.index')
            ->with('gurudankaryawan', gurudankaryawan::all());
        ;
    }

    public function save(Request $request)
    {
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $ngajarMapelApa = $request->detailGuru ?? null;
        $sambutan = $request->sambutan ?? null;
        $foto = $request->file('foto');

        $data = new gurudankaryawan;
        $data->nama = $nama;
        $data->jabatan = $jabatan . ' ' . $ngajarMapelApa;
        $data->sambutan = $sambutan;

        if ($request->hasFile('foto')) {
            $path = public_path('img/guru_karyawan');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto->move($path, $filename);

            $data->foto = $filename;
        }

        $data->save();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }
}
