@php
    // import profilkolah
    use App\Models\profilSekolah as profilsekolahmodel;

    // memanggil data sejarah singkat
    $profil_sekolah=profilsekolahmodel::where('key', 'profil_sekolah')->first();
    $makna_logo=profilsekolahmodel::where('key', 'makna_logo')->first();
    $peta_sekolah=profilsekolahmodel::where('key', 'peta_sekolah')->first();
    $sejarah=profilsekolahmodel::where('key', 'sejarah_singkat')->first();
    $visi=profilsekolahmodel::where('key', 'visi')->first();
    $misi=profilsekolahmodel::where('key', 'misi')->first();
@endphp

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Import All Css --}}
    @include('layouts.css')

    {{-- Import All Js --}}
    @include('layouts.js')

    <!-- title -->
    <title> Profil SMK Negeri 1 Bukateja </title>
</head>

<body style="font-family: Poppins;">

    <!-- NAVBAR -->
    <div class="container-fluid">
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
    </div>
    <!-- NAVBAR -->

    <!-- COLUMN 1 -->
    <div class="container-fluid p-3">
        <br/><br/>
        <div class="container" style="background-color: #F6FAFD; border-radius: 20px; margin-top: 0.75em; box-shadow: 4px 4px 4px rgba(0, 0, 1.2, 0.5);">
            <!-- INTRO -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 pt-5" style="border-radius: 20px 20px 0px 0px;">
                    <center>
                        <h2 style="text-align: center; font-weight: bold; color: #000;">Profil SMK N 1 Bukateja</h2>
                        <img src="{{url('/new_design/bahan/Group 116.png')}}" class="img-fluid">
                    </center>
                    <div class="container">
                        <p class="pt-3 px-5" style="text-align: center;">
                            {{$profil_sekolah->value}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- INTRO -->

            <!-- MAKNA LOGO -->
            <div class="container-fluid px-5 py-3">
                <div class="row py-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <center>
                            <img class="img-fluid w-50" src="{{url('new_design/bahan/Rectangle 211.png')}}">
                            <h1 style="font-weight: bold;">MAKNA LOGO</h1>
                            <img class="img-fluid w-50" src="{{url('new_design/bahan/Rectangle 211.png')}}">
                        </center>
                    </div>
                </div>
                <div class="row rec-profile p-3 px-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="container p-5">
                            <center>
                                <img class="img-fluid w-25" src="{{url('new_design/bahan/Logo.png')}}">
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="container pb-5">
                            <p style="text-align: justify; color: #FFF;">
                                {{$makna_logo->value}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MAKNA LOGO-->

            <!-- SEJARAH -->
            <div class="container-fluid px-5 py-3">
                <div class="row rec-profile-2 p-3 px-5">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="container p-3">
                            <center>
                                <h1 style="font-weight: bold;">SEJARAH SMKN 1 BUKATEJA</h1>
                                <img class="img-fluid" style="border-radius: 5px;" src="{{url('new_design/bahan/carousel-3.png')}}">
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="container p-3">
                            <p style="text-align: justify;">
                                {{$sejarah->value}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEJARAH -->

            <!-- VISI MISI -->
            <div class="container-fluid px-5 py-5 ">
                <div class="row rec-profile-2 ">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-3 " style="text-align: center; ">
                        <h1 style="font-weight: bold; ">VISI</h1>
                        <p class="vm " style="text-align: center; ">
                            {{$visi->value}}
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-3 " style="text-align: center; " id="animasi_misi ">
                        <h1 style="font-weight: bold; ">MISI</h1>
                        {{-- <ul class="vm " style="text-align: justify; ">
                            <li>Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif berorientasi pada kompetensi pendidikan nasional.</li>
                            <li>Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di dunia kerja.</li>
                            <li>Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan berwawasan lingkungan sekolah.</li>
                        </ul> --}}
                        {!!($misi->value)!!}
                    </div>
                </div>
            </div>
            <!-- VISI MISI -->

            <!-- MAPS -->
            <div class="container-fluid pt-2 pb-5 px-5 ">
                <div class="row pb-4 ">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <center>
                            <img class="img-fluid w-50 " src="{{url('new_design/bahan/Rectangle 211.png')}}">
                            <h1 style="font-weight: bold; ">PETA SEKOLAH</h1>
                            <img class="img-fluid w-50 " src="{{url('new_design/bahan/Rectangle 211.png')}}">
                        </center>
                    </div>
                </div>
                <div class="row p-5 px-5 rec-profile ">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <center>
                            {!!($peta_sekolah->value)!!}
                        </center>
                    </div>
                </div>
            </div>
            <!-- MAPS -->
        </div>
    </div>
    <!-- COLUMN 1 -->

    <!-- FOOTER -->
    @include('layouts.base_footer')
    <!-- FOOTER -->

</body>

</html>

</html>