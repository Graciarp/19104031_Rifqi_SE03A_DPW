<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{informasi, prestasi, adminManagement};
use App\Models\informasiModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('prestasi', 'prestasi');

Route::get('/informasi/baca/{slug}', function ($slug) {
    // Ambil data berdasarkan slug
    $informasi = informasiModel::where('slug', $slug)->first();

    // Tampilkan kedalam view baca artikel
    return view('informasiBaca') -> with('informasi', $informasi);
}) -> name('informasi.baca');

Route::view('profil', 'profil');

Route::view('informasi', 'informasi', ['informasi' => informasiModel::all()]);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route hanya bisa diakses ketika sudah login
Route::group(['middleware' => 'auth'], function() {
    Route::get('/manajemenAdmin/infoUser/{id}', [adminManagement::class, 'show']);
    Route::resource('manajemenAdmin', adminManagement::class);
    Route::resource('informasi', informasi::class, ['except' => ['index']]);
    Route::resource('prestasi', prestasi::class, ['except' => ['index']]);
});

Route::view('/jurusan/DPIB', 'jurusan.DPIB');
Route::view('/jurusan/Multimedia', 'jurusan.Multimedia');
Route::view('/jurusan/RPL', 'jurusan.RPL');
Route::view('/jurusan/TB', 'jurusan.TB');
Route::view('/jurusan/TBO', 'jurusan.TBO');
Route::view('/jurusan/TKJ', 'jurusan.TKJ');
Route::view('/jurusan/TKRO', 'jurusan.TKRO');

