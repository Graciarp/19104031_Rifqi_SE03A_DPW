@extends('layouts.base')

@section('content')
@php
    // import model
    use App\Models\beranda as berandaModel;
    use App\Models\testimoni as testiModel;
    use App\Models\gurudankaryawan;

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
@endphp

    <!-- CAROUSEL -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('/')}}/new_design/bahan/carousel-1.png" class="d-block w-100" alt="...">
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
                        <button type="button" class="btn btn-danger">Selengkapnya</button>
                    </font>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/')}}/new_design/bahan/carousel-2.png" class="d-block w-100" alt="...">
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
                        <button type="button" class="btn btn-danger">Selengkapnya</button>
                    </font>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/')}}/new_design/bahan/carousel-3.png" class="d-block w-100" alt="...">
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
                        <button type="button" class="btn btn-danger">Selengkapnya</button>
                    </font>
                </div>
            </div>
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
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/mm-1.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Multimedia</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/tbs-2.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Tata Busana</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/tkj-1.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Tata Busana</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/tkro-1.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Tata Busana</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/tkro-1.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Tata Busana</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <img src="{{url('/')}}/new_design/bahan/tkro-1.JPG" class="card-img-top" alt="...">
                        <a href="#" class="link">
                            <div class="card-body">
                                <h5 class="card-title carousel_text">Tata Busana</h5>
                                <p class="card-text carousel_text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </a>
                    </div>
                </div>
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
                    <img class="img-fluid" src="{{url('/')}}/new_design/bahan/mm-1.JPG" style="border-radius: 3px;">
                </div>
                <div class="col-6-a">
                    <div class="row" style="background-color: #A80000; border-radius: 5px;">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extraOsis()">OSIS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extraPramuka()">Pramuka</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extraTeater()">Teater</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extraSeniTari()">Seni Tari</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-eskul" onclick="extraLainnya()">Lainnya</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row ">
                        <div class="col p-3 " style="border-color: #630000; border-width: 2px; border-radius: 5px; ">
                            <p id="ekstraText" style="text-align: justify; ">OSIS adalah sekelompok siswa yang tergabung dalam OSIS yang memiliki tugas sebagai pelaksana dalam suatu kegiatan sekolah dan pendukung berbagai kegiatan siswa di sekolah.
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
        function extraOsis() {
            var ekstraDescription = "OSIS adalah sekelompok siswa yang tergabung dalam OSIS yang memiliki tugas sebagai pelaksana dalam suatu kegiatan sekolah dan pendukung berbagai kegiatan siswa di sekolah.";
            $("#ekstraText").text(ekstraDescription)
        }

        function extraPramuka() {
            var ekstraDescription = "suatu kegiatan kepramukaan yang dilaksanakan diluar jam pembelajaran di sekolah dan di luar lingkungan keluarga yang bertujuan mewadahi bakat, minat, dan potensi anak untuk dikembangkan secara terus-menerus."
            $("#ekstraText").text(ekstraDescription)
        }

        function extraTeater() {
            var ekstraDescription = "merupakan salah satu salah satu seni bermain peran (drama) yang menyajikan cerita kehidupan nyata di atas pentas."
            $("#ekstraText").text(ekstraDescription)
        }

        function extraSeniTari() {
            var ekstraDescription = "wadah bagi siswi yang memiliki kemampuan dalam menari. Sehingga mereka bisa mengembangkan dan mengekspresikan diri mereka melalui seni tari."
            $("#ekstraText").text(ekstraDescription)
        }

        function extraLainnya() {
            var ekstraDescription = "Kami memiliki beberapa ekstrakurikuler lainnya"
            $("#ekstraText").text(ekstraDescription)
        }
    </script>
@endsection