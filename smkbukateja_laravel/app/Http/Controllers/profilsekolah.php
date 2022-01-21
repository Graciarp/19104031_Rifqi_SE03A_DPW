<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profilSekolah as profilsekolahmodel;

class profilsekolah extends Controller
{
    public function index()
    {
        // masuk ke folder
        return view('admin.profilsekolah.index')
            ->with('profilsekolah', profilsekolahmodel::all());;
    }

    public function edit($id)
    {
        // masuk ke folder
        return view('admin.profilsekolah.edit')
            ->with('profilsekolah', profilsekolahmodel::find($id));;
    }

    public function update($id)
    {
        $data = profilsekolahmodel::find($id);

        if (
            $data->key == 'struktur_organisasi' and request() -> hasFile('value')
        ) {
            $path_upload = public_path('img');
            $file = request()->file('value');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path_upload, $filename);

            $data->value = $filename;
        }

        if ($data->key != 'struktur_organisasi') {
            $data->value=request('value');
        }

        $data->save();
        return redirect()->back() -> with('success', 'Data berhasil diubah');
    }
}
