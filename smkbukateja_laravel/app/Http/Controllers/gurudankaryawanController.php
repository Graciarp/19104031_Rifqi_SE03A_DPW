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

    public function showJson($id)
    {
        $data = gurudankaryawan::find($id);
        $data->jabatan_only = explode(' ', $data->jabatan)[0];
        $data->mengajar_apa = str_replace('guru ', '', $data->jabatan);
        return response() -> json(['data' => $data]);
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

        if ($jabatan == 'guru') {
            $data->jabatan = $jabatan . ' ' . $ngajarMapelApa;
        } else {
            $data->jabatan = $jabatan;
        }
        
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
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $ngajarMapelApa = $request->detailGuru ?? null;
        $sambutan = $request->sambutan ?? null;
        $foto = $request->file('foto');

        $data = gurudankaryawan::find($id);
        $data->nama = $nama;

        if ($jabatan == 'guru') {
            $data->jabatan = $jabatan . ' ' . $ngajarMapelApa;
        } else {
            $data->jabatan = $jabatan;
        }

        $data->sambutan = $sambutan;

        if ($request->hasFile('foto')) {
            $path = public_path('img/guru_karyawan');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto->move($path, $filename);

            $data->foto = $filename;
        } else {
            $data->foto = $data->foto;
        }

        $data->update();
        return redirect() -> back() -> with('success', 'Data berhasil disimpan');
    }
}
