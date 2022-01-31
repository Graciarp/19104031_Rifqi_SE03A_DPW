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
    
    @include('layouts.meta_seo')

    {{-- Import All Css --}}
    @include('layouts.css')

    {{-- Import All Js --}}
    @include('layouts.js')

    <!-- title -->
    <title> Profil SMK Negeri 1 Bukateja </title>
</head>

<body style="font-family: Poppins;">

    @include('layouts.preloader')

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
                        <h2 style="text-align: center; font-weight: bold; color: #000;">Hubungi Kami</h2>
                    </center>
                </div>
            </div>

            <!-- CONTENT -->

            <br>

            <div class="container px-5">
                <p>
                    Bila Anda membutuhkan bantuan, silahkan hubungi kami melalui email atau telepon dibawah ini.
                </p>

                <ul>
                    <li>
                        <a href="mailto:admin@smkn1bukateja.sch.id" style="text-decoration: none;">Email : admin@smkn1bukateja.sch.id</a>
                    </li>
                    <li>
                        <a href="tel:0286476110" style="text-decoration: none;">Telp/Fax. (0286)476110</a>
                    </li>
                </ul>

                <p>
                    Atau bisa kunjungi kami di alamat berikut :
                </p>

                Jalan Raya Purwandaru, Kelurahan Majasari Bukateja – Indonesia 53382 - <a target="_blank" href="https://goo.gl/maps/pcCncx2otmwunyn48">buka peta</a>
            </div>

            <br><br>

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