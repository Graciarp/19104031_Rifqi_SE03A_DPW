<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasiModel;
use App\Models\prestasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
            ->with('data', informasiModel::all())
            ->with('prestasi', prestasi::all())
            ;
        ;
    }
}
