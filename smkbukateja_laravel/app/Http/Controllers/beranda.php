<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beranda as berandaModel;
use App\Models\programKeahlian as programKeahlianModel;
use App\Models\ekstrakurikuler;

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
            $path_upload = public_path('img');
            $file = request()->file('value');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path_upload, $filename);

            $data->value = $filename;
        }

        if ($data->key != 'banner_beranda') {
            $data->value=request('value');
        }

        $data->save();
        return redirect()->back() -> with('success', 'Data berhasil diubah');
    }
}
