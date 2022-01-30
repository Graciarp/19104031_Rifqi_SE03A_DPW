<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    informasi, 
    prestasi, 
    adminManagement, 
    gurudankaryawanController, 
    profilsekolah, 
    beranda, 
    testimoni,
    programKeahlian,
    EkstrakurikulerController
};
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

Route::get('/keluar', function () {
    Auth::logout();
    return redirect('/');
});

Route::view('prestasi', 'prestasi');

Route::get('/informasi/baca/{slug}', function ($slug) {
    // Ambil data berdasarkan slug
    $informasi = informasiModel::where('slug', $slug)->first();

    // Tampilkan kedalam view baca artikel
    return view('informasiBaca')->with('informasi', $informasi);
})->name('informasi.baca');

Route::view('profil', 'profil');

Route::view('informasi', 'informasi', ['informasi' => informasiModel::all()]);

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route hanya bisa diakses ketika sudah login
Route::group(['middleware' => 'auth'], function () {
    Route::get('/manajemenAdmin/infoUser/{id}', [adminManagement::class, 'show']);
    Route::resource('manajemenAdmin', adminManagement::class);

    Route::get('informasi/index', [informasi::class, 'index']);
    Route::resource('informasi', informasi::class, ['except' => ['index']]);

    Route::get('prestasi/index', [prestasi::class, 'index']);
    Route::resource('prestasi', prestasi::class, ['except' => ['index']]);

    Route::get('gurukaryawan/index', [gurudankaryawanController::class, 'index']);
    Route::get('gurukaryawan/json/{id}', [gurudankaryawanController::class, 'showJson']);
    Route::post('gurukaryawan/save', [gurudankaryawanController::class, 'save']);
    Route::put('gurukaryawan/update/{id}', [gurudankaryawanController::class, 'update']);

    Route::get('profilsekolah/index', [profilsekolah::class, 'index']);
    Route::get('profilsekolah/edit/{id}', [profilsekolah::class, 'edit']);
    Route::post('profilsekolah/update/{id}', [profilsekolah::class, 'update']);

    Route::get('beranda/index', [beranda::class, 'index']);
    Route::get('beranda/editBeranda/{id}', [beranda::class, 'edit']);
    Route::get('beranda/hapus_gb_beranda/{index}', [beranda::class, 'hapus_gb_beranda']);
    Route::post('beranda/update/{id}', [beranda::class, 'update']);

    Route::get('testimoni/index', [testimoni::class, 'index']);
    Route::get('testimoni/hapus/{id}', [testimoni::class, 'destroy']);
    Route::resource('testimoni', testimoni::class, ['except' => ['index']]);

    Route::get('programKeahlian/json/{id}', [programKeahlian::class, 'json']);
    Route::post('programKeahlian/save', [programKeahlian::class, 'save']);
    Route::post('programKeahlian/update/{id}', [programKeahlian::class, 'update']);

    Route::get('ekstrakurikuler/json/{id}', [EkstrakurikulerController::class, 'json']);
    Route::post('ekstrakurikuler/save', [EkstrakurikulerController::class, 'save']);
    Route::post('ekstrakurikuler/update/{id}', [EkstrakurikulerController::class, 'update']);
});

Route::view('/jurusan/DPIB', 'jurusan.DPIB');
Route::view('/jurusan/Multimedia', 'jurusan.Multimedia');
Route::view('/jurusan/RPL', 'jurusan.RPL');
Route::view('/jurusan/TB', 'jurusan.TB');
Route::view('/jurusan/TBO', 'jurusan.TBO');
Route::view('/jurusan/TKJ', 'jurusan.TKJ');
Route::view('/jurusan/TKRO', 'jurusan.TKRO');

Route::view('/guru/kepsek', 'guru.kepsek');
Route::view('/guru/karyawan', 'guru.karyawan');
Route::view('/guru/guruMapel', 'guru.guruMapel');
