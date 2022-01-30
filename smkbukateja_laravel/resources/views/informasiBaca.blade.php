@php
    use App\Models\informasiModel;

    $nextData = informasiModel::where('id', '>', $informasi->id)->first();
    $previousData = informasiModel::where('id', '<', $informasi->id)->first();
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
                    {{$informasi->judul}}
                </h1>
            </div>
            <!-- JUDUL -->

            <!-- ARTIKEL -->
            <div class="container pb-5">
                <center>
                    <img class="img-fluid-pk" src="{{url('/img/artikel' . '/' . $informasi->gambar)}}" style="border-radius: 5px;">
                </center>
            </div>
            <div class="container px-5">
                <div class="container py-4 px-5 ">
                    <p style="text-align: justify; ">
                        {{$informasi->isi}}
                    </p>
                </div>
            </div>
            <!-- ARTIKEL -->

            <!-- GALERI KEGIATAN -->
            <div class="container-fluid p-0">
                <div class="container">
                    <div class="scroll" style="height: 250px; background:linear-gradient(#A80000, #630000);">
                        <div class="row px-5 g-2">
                            @foreach ($informasiAll as $i)
                            <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <a href="{{route('informasi.baca', $i->slug)}}">
                                            <img src="{{url('img/artikel'.'/' . $i->gambar)}}" class="card-img-top">
                                        </a>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="text-decoration-none text-black" href="{{route('informasi.baca', $i->slug)}}">
                                            <b>
                                                {{$i->judul}}
                                            </b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- GALERI KEGIATAN -->

            <!-- PREVIOUS NEXT -->
            <div class="container-fluid p-5">
                <div class="row px-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 justify-content-start">
                        @if($previousData)
                            <img class="img-fluid" src="{{url('new_design/bahan/icon.png')}}">
                            <a class="px-2 link-pk" href="{{route('informasi.baca', $previousData->slug)}}">prev</a>
                        @endif
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;">
                        @if($nextData)
                            <a class="px-2 link-pk" href="{{route('informasi.baca', $nextData->slug)}}">next</a>
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