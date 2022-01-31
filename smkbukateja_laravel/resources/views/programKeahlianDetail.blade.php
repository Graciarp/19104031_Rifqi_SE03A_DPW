@php
    use App\Models\programKeahlian;

    $nextBtn = programKeahlian::where('id', '>', $data->id)->first();
    $previousBtn = programKeahlian::where('id', '<', $data->id)->first();

    $galeri = json_decode($data->galeri, true);
@endphp

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @include('layouts.meta_seo')

    {{-- Import All Css --}}
    @include('layouts.css')

    {{-- Import All Js --}}
    @include('layouts.js')
    
    <!-- title -->
    <title> Program Keahlian SMK Negeri 1 Bukateja </title>
</head>

<body style="font-family: Poppins;">

    @include('layouts.preloader')

    <!-- NAVBAR -->
    <div class="container-fluid">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
            <div class="container-fluid justify-content-end px-5">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav" style="font-size: 14px;">
                        @include('layouts.navbar_content')
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR -->
    </div>
    <!-- NAVBAR -->

    <div class="container-fluid p-3">
        <!-- ISI -->
        <div class="container py-3 px-0 bg-light" style="margin-top: 5em; margin-bottom:3em; border-radius: 10px; box-shadow: 4px 4px 4px rgba(0, 0, 2, 0.5);">
            <!-- JUDUL -->
            <div class="container-fluid p-5">
                <h1 style="font-weight: bold; text-align: center;">
                    {{$data->judul}}
                </h1>
            </div>
            <!-- JUDUL -->

            <!-- GAMBAR -->
            <div class="container pb-5">
                <center>
                    <img class="img-fluid-pk" src="{{url('/img/program_keahlian' . '/' . $data->image)}}" style="border-radius: 5px;">
                </center>
            </div>
            <!-- GAMBAR -->

            <!-- APA ITU TEKNIK KOMPUTER DAN JARINGAN -->
            <div class="rec-pk">Apa Itu {{$data->judul}}?</div>
            <div class="container p-3">
                <div class="container row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                            <p style="text-align: justify; ">
                                {{$data->deskripsi}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- APA ITU TEKNIK KOMPUTER DAN JARINGAN -->

            <!-- APA SAJA YANG DIPELAJARI? -->
            <div class="rec-pk ">Apa Saja yang Dipelajari?</div>
            <div class="container p-3">
                <div class="container row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                            <center>
                                <img class="img-fluid" src="{{url('img/program_keahlian/materi') . '/' . $data->yang_dipelajari_img}}">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- APA SAJA YANG DIPELAJARI? -->

            <!-- PROSPEK KERJA -->
            {{-- <div class="container-fluid p-0 pt-4">
                <div class="rec-pk">Bagaimana dengan Prospek Kerjanya ?</div>
                <div class="container pt-5">
                    <div class="row px-5 justify-content-center d-flex">
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                            <div class="card h-100">
                                <img src="bahan/tkj-1.JPG" class="card-img-top" alt="...">
                                <a href="#" class="link">
                                    <div class="card-body">
                                        <h5 class="card-title carousel_text">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text" style="text-align: justify;">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- PROSPEK KERJA -->

            <!-- GALERI KEGIATAN -->
            @if($data->galeri)
            <div class="container-fluid p-0 pt-4">
                <div class="rec-pk">Galeri Kegiatan TKJ</div>
                <div class="container pt-5">
                    <div class="scroll" style="height: 250px;">
                        <div class="row px-5 g-2">
                            @foreach($galeri as $g)
                                <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3">
                                    <div class="card">
                                        <img src="{{url('img/program_keahlian/galeri' . '/' . $g)}}" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- GALERI KEGIATAN -->
            @endif

            <!-- APA KATA ALUMNI -->
            {{-- <div class="container-fluid p-0 pt-5">
                <div class="rec-pk ">Apa Kata Alumni?</div>
                <div class="container pt-5 px-5">
                    <div class="row px-3">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <center>
                                        <div class="lingkaran">
                                            <img src="bahan/testi.png">
                                        </div>
                                        <div class="container rectangle pt-5 pb-5">
                                            <br/><br/>
                                            <h5 class="pt-5">Fauziyah Ulur Rosyad Prawidani</h5>
                                            <small class="text-secondary">xxxxxx</small>
                                            <br/>
                                            <p class="px-5" style="margin-top: 5px; text-align: justify;"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</small>
                                            </p>
                                        </div>
                                    </center>
                                </div>
                                <div class="carousel-item ">
                                    <center>
                                        <div class="lingkaran">
                                            <img src="bahan/lingkaran.jpg">
                                        </div>
                                        <div class="container rectangle pt-5 pb-5">
                                            <br/><br/>
                                            <h5 class="pt-5">Gracia Rizka Pasfica</h5>
                                            <small class="text-secondary">xxxxxx</small>
                                            <br/>
                                            <p class="px-5" style="margin-top: 5px; text-align: justify;"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</small>
                                            </p>
                                        </div>
                                    </center>
                                </div>
                                <div class="carousel-item ">
                                    <center>
                                        <div class="lingkaran">
                                            <img src="bahan/testi.png">
                                        </div>
                                        <div class="container rectangle pt-5 pb-5">
                                            <br/><br/>
                                            <h5 class="pt-5">Fauziyah Ulur Rosyad Prawidani</h5>
                                            <small class="text-secondary">xxxxxx</small>
                                            <br/>
                                            <p class="px-5" style="margin-top: 5px; text-align: justify;"> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.</small>
                                            </p>
                                        </div>
                                    </center>
                                </div>
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
            </div> --}}
            <!-- APA KATA ALUMNI -->

            <!-- PREVIOUS NEXT -->
            <div class="container-fluid p-5">
                <div class="row px-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 justify-content-start">
                        @if($previousBtn)
                            <img class="img-fluid" src="{{url('new_design/bahan/icon.png')}}">
                            <a class="px-2 link-pk" href="{{url('program_keahlian' . '/' . $previousBtn->id)}}">prev</a>
                        @endif
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">
                        @if($nextBtn)
                            <a class="px-2 link-pk" href="{{url('program_keahlian' . '/' . $nextBtn->id)}}">next</a>
                            <img class="img-fluid" src="{{url('new_design/bahan/icon2.png')}}">
                        @endif
                    </div>
                </div>
            </div>
            <!-- PREVIOUS NEXT -->
        </div>
    </div>

    @include('layouts.base_footer')
</body>

</html>

</html>