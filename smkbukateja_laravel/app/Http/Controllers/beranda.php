<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beranda as berandaModel;

class beranda extends Controller
{
    public function index()
    {
        // Memanggil file index
        return view('admin.beranda.index')
            ->with('beranda', berandaModel::all());
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
        $data->value=request('value');
        $data->save();
        return redirect()->back();
    }
}
