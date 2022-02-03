@php
    use App\Models\gurudankaryawan;
    $kepsek = gurudankaryawan::where('jabatan', 'kepala_sekolah') -> first();
    $wakilkepsek = gurudankaryawan::where('jabatan', 'wakil_kepala_sekolah') -> first();
    $kepalaTU = gurudankaryawan::where('jabatan', 'kepala_tata_usaha') -> first();

    $guru = gurudankaryawan::whereNotIn('jabatan', ['kepala_sekolah', 'wakil_kepala_sekolah', 'kepala_tata_usaha', 'karyawan']) -> get();
    $karyawan = gurudankaryawan::where('jabatan', 'karyawan') -> get();
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
    <title> Guru dan Karyawan SMK Negeri 1 Bukateja </title>
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
                        <h2 style="text-align: center; font-weight: bold; color: #000;">Guru Karyawan SMK N 1 Bukateja</h2>
                    </center>

                    <br><br>

                    <div class="container">
                        {{-- Kepala dan Wakil Sekolah --}}
                        <div class="rec-pk">Kepala & Wakil Kepala Sekolah</div>
                        <div class="container p-3">
                            <div class="container row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                                        <div class="row">
                                            <!-- kepala sekolah -->
                                            <div class="col-lg-6 col-sm-12 p-0">
                                                <div class="kepala-tu part">
                                                    <div class="card shadow" style="width: 18rem;">
                                                        <img src="{{url('img/guru_karyawan' . '/' . $kepsek->foto)}}" class="w-100" alt="kepala-tu">
                                                        <div class="card-body text-center">
                                                            <h5 class="text-center card-title">Kepala Sekolah</h5>
                                                            <p class="text-center card-text">
                                                                {{$kepsek->nama}}
                                                            </p>
                                                            <small>
                                                                {{$kepsek->sambutan}}
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- kepala sekolah -->

                                            <div class="col-lg-6 col-sm-12">
                                                <!-- wakil sekolah -->
                                                <div class="kepala-tu part">
                                                    <div class="card shadow" style="width: 18rem;">
                                                        <img src="{{url('img/guru_karyawan' . '/' . $wakilkepsek->foto)}}" class="w-100" alt="kepala-tu">
                                                        <div class="card-body">
                                                            <h5 class="text-center card-title">Wakil Kepala Sekolah</h5>
                                                            <p class="text-center card-text">
                                                                {{$wakilkepsek->nama}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- wakil sekolah -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Kepala dan Wakil Sekolah --}}

                        {{-- Daftar Guru --}}
                        <div class="rec-pk">Daftar Guru</div>
                        <div class="container p-3">
                            <div class="container row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                                        <div class="row px-0">
                                            @foreach ($guru as $g)
                                                <div class="col-lg-4 col-sm-12 col-md-6">
                                                    <div class="card shadow">
                                                        <img src="{{url('img/guru_karyawan' . '/' . $g->foto)}}" class="w-100" alt="subKonten">
                                                        <div class="card-body">
                                                            <h5 class="text-center card-title">
                                                                {{ ucwords(str_replace('_', " ", $g->jabatan)) }}
                                                            </h5>
                                                            <p class="text-center card-text">
                                                                {{$g->nama}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Daftar Guru --}}

                        {{-- Daftar Karyawan --}}
                        <div class="rec-pk">Daftar Karyawan</div>
                        <div class="container p-3">
                            <div class="container row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                                        <div class="row px-0">
                                            @foreach ($karyawan as $k)
                                                <div class="col-lg-4 col-sm-12 col-md-6">
                                                    <div class="card shadow">
                                                        <img src="{{url('img/guru_karyawan' . '/' . $k->foto)}}" class="w-100" alt="subKonten">
                                                        <div class="card-body">
                                                            <h5 class="text-center card-title">
                                                                {{ ucwords(str_replace('_', " ", $k->jabatan)) }}
                                                            </h5>
                                                            <p class="text-center card-text">
                                                                {{$k->nama}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Daftar Karyawan --}}

                    </div>
                </div>
            </div>
            <!-- INTRO -->

            

            

            
        </div>
    </div>
    <!-- COLUMN 1 -->

    <!-- FOOTER -->
    @include('layouts.base_footer')
    <!-- FOOTER -->

</body>

</html>

</html>