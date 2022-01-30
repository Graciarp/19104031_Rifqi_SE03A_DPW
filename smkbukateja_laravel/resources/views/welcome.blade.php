@extends('layouts.base')

@section('content')
@php
    // import model
    use App\Models\beranda as berandaModel;
    use App\Models\testimoni as testiModel;
    use App\Models\gurudankaryawan;
    use App\Models\programKeahlian;
    use App\Models\ekstrakurikuler;

    // memanggil data dari model
    $namaSekolah=berandaModel::where('key', 'nama_sekolah')->first();
    $slogan=berandaModel::where('key', 'slogan')->first();
    $visi=berandaModel::where('key', 'visi')->first();
    $misi=berandaModel::where('key', 'misi')->first();
    $banner_beranda=berandaModel::where('key', 'banner_beranda')->first();
    $testimoni=testiModel::all();

    $kepsek = gurudankaryawan::where('jabatan', 'kepala_sekolah') -> first();
    $wakilkepsek = gurudankaryawan::where('jabatan', 'wakil_kepala_sekolah') -> first();
    $kepalaTU = gurudankaryawan::where('jabatan', 'kepala_tata_usaha') -> first();

    $guru = gurudankaryawan::whereNotIn('jabatan', ['kepala_sekolah', 'wakil_kepala_sekolah', 'kepala_tata_usaha', 'karyawan']) -> get();
    $karyawan = gurudankaryawan::where('jabatan', 'karyawan') -> get();

    $programKeahlian = programKeahlian::all();
    $ekstrakurikuler = ekstrakurikuler::all();
    $ekstrakurikulerFirst = ekstrakurikuler::first();
@endphp

    <!-- CAROUSEL -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $urutan_slide = 1;
            @endphp
            @foreach (json_decode($banner_beranda->value, true) as $item)
                <div class="carousel-item @if($urutan_slide == 1) active @endif">
                    <img src="{{url('/img' . '/' . $item)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <font style="font-family: Poppins;">
                            <h4>Selamat Datang di</h4>
                            <h1 style="font-weight: bold;">
                                {{$namaSekolah->value}}
                            </h1>
                            <p>
                                {{$slogan->value}}
                            </p>
                            <br/>
                            <a href="/profil" type="button" class="btn btn-danger">Selengkapnya</a>
                        </font>
                    </div>
                </div>    

                @php
                    $urutan_slide++;
                @endphp
            @endforeach
        </div>
    </div>
    <!-- CAROUSEL -->

    <!-- VISI MISI -->
    <div class="container-fluid p-5" style="background: linear-gradient(#630000, #A80000); color: #FFF;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 p-3" style="text-align: center;">
                <h1 style="font-weight: bold;">VISI</h1>
                <p class="vm" style="text-align: center; ">
                    {{$visi->value}}
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-3" style="text-align: center;">
                <h1 style="font-weight: bold;">MISI</h1>
                {{-- <ul class="vm" style="text-align: justify;">
                    <li>Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif berorientasi pada kompetensi pendidikan nasional.</li>
                    <li>Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di dunia kerja.</li>
                    <li>Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan berwawasan lingkungan sekolah.</li>
                </ul> --}}
                {!!($misi->value)!!}
            </div>
        </div>
    </div>
    <!-- VISI MISI -->

    <!-- PROGRAM KEAHLIAN -->
    <div class="container-fluid pt-5 ">
        <center>
            <h1 style="text-align: center; font-weight: bold;">PROGRAM KEAHLIAN</h1>
            <img class="img-fluid" src="{{url('/')}}/new_design/bahan/line.png">
        </center>
        <div class="container p-5">
            <div class="row g-4 justify-content-center">
                @foreach($programKeahlian as $program)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <a href="{{url('/program_keahlian' . '/' . $program->id)}}" class="link">
                            <img src="{{url('img/program_keahlian') . '/' . $program->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">
                                    {{$program->judul}}
                                </h5>
                                <p class="card-text carousel_text">
                                    {{$program->deskripsi}}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PROGRAM KEAHLIAN -->

    <!-- EKSTRAKURIKULER -->
    <div class="container-fluid pt-5">
        <center>
            <h1 style="text-align: center; font-weight: bold;">EKSTRAKURIKULER</h1>
            <img class="img-fluid" src="{{url('/')}}/new_design/bahan/line.png">
        </center>
        <div class="container p-5">
            <div class="row">
                <div class="img-card col-6-a">
                    <img id="ekstraImage" class="img-fluid" src="{{url('/img/ekstrakurikuler' .'/' . $ekstrakurikulerFirst->image )}}" style="border-radius: 3px;">
                </div>
                <div class="col-6-a">
                    <div class="row" style="background-color: #A80000; border-radius: 5px;">
                        <ul class="nav justify-content-center">
                            @foreach($ekstrakurikuler as $e)
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extra{{str_replace(' ', '_', $e->judul)}}()">
                                    {{$e->judul}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row ">
                        <div class="col p-3 " style="border-color: #630000; border-width: 2px; border-radius: 5px; ">
                            <p id="ekstraText" style="text-align: justify; ">
                                {{$ekstrakurikulerFirst->deskripsi}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- EKSTRAKURIKULER -->

    <!-- KATA ALUMNI -->
    <div class="container-fluid pt-5">
        <center>
            <h1 style="text-align: center; font-weight: bold;">KATA ALUMNI</h1>
            <img class="img-fluid" src="{{url('/')}}/new_design/bahan/line.png">
        </center>
        <div class="container p-5">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $urutanTesti = 1;
                    @endphp
                    @foreach($testimoni as $k)
                    <div class="carousel-item @if($urutanTesti == 1) active @endif ">
                        <center>
                            <div class="lingkaran">
                                <img src="{{url('img' . '/' . $k->foto)}}">
                            </div>
                            <div class="container rectangle pt-5 pb-5">
                                <br/><br/>
                                <h5 class="pt-5">
                                    {{$k->nama}}
                                </h5>
                                <small class="text-secondary">
                                    {{$k->posisi}}
                                </small>
                                <br/>
                                <p class="px-5" style="margin-top: 5px; text-align: justify;"> <small>
                                    {{$k->teks}}
                                </small>
                                </p>
                            </div>
                        </center>
                    </div>

                    @php
                        $urutanTesti++;
                    @endphp
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>
        </div>
    </div>
    <!-- KATA ALUMNI -->

    <script>
        @foreach($ekstrakurikuler as $e)
        function extra{{str_replace(' ', '_', $e->judul)}}() {
            var ekstraDescription = "{{$e->deskripsi}}";
            $("#ekstraText").text(ekstraDescription)
            $('#ekstraImage').attr('src', '{{url('img/ekstrakurikuler' . '/' . $e->image)}}');
        }
        @endforeach
    </script>
@endsection