<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{informasiModel, programKeahlian, ekstrakurikuler};

class SitemapXmlController extends Controller
{
    public function index() {
        $posts = informasiModel::all();
        $programKeahlian = programKeahlian::all();
        $ekstrakurikuler = ekstrakurikuler::all();

        return response()->view('sitemap.index', [
            'posts' => $posts,
            'programKeahlian' => $programKeahlian,
            'ekstrakurikuler' => $ekstrakurikuler
        ])->header('Content-Type', 'text/xml');
      }
}
