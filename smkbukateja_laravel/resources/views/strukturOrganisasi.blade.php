@php
    use App\Models\beranda;
    use App\Models\programKeahlian;

    $strukturOrganisasiSekolah = beranda::where('key', 'struktur_organisasi_sekolah') -> first();
    $programKeahlian = programKeahlian::all();

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
    <title> Struktur Organisasi | SMK Negeri 1 Bukateja </title>
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
                        <h2 style="text-align: center; font-weight: bold; color: #000;">Struktur Organisasi</h2>
                    </center>
                    <br><br>
                    <div class="container">

                        {{-- Struktur organisasi sekolah --}}
                        <div class="rec-pk">Struktur Organisasi Sekolah</div>
                        <div class="container p-3">
                            <div class="container row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                                        <img src="{{url('img' . '/' . $strukturOrganisasiSekolah->value)}}" width="100%" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Struktur organisasi sekolah --}}

                        {{-- Struktur organisasi jurusan --}}
                        <div class="rec-pk">Struktur Jurusan</div>
                        <div class="container p-3">
                            <div class="container row">
                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <div class="container py-4 @if(Agent::isDesktop()) px-5 @endif">
                                        <div class="row">
                                            @foreach ($programKeahlian as $p)
                                                <div class="col-lg-4 col-sm-12 col-md-6 mb-3">
                                                    <div class="card">
                                                        <div class="card-body p-0">
                                                            <img src="{{url('img/program_keahlian/struktur_organisasi_img' . '/' . $p->struktur_organisasi_img)}}" width="100%" alt="" srcset="">
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <b>
                                                                {{$p->judul}}
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Struktur organisasi jurusan --}}

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