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
        $data->value = request('value');
        $data->save();
        return redirect()->back();
    }
}
