@php
    use App\Models\beranda as berandaModel;

    $namaSekolah=berandaModel::where('key', 'nama_sekolah')->first();
    $slogan=berandaModel::where('key', 'slogan')->first();
    $banner_beranda=berandaModel::where('key', 'banner_beranda')->first();
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
    <title> SMK Negeri 1 Bukateja </title>
</head>

<body style="font-family: Poppins;">

    @include('layouts.preloader')

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
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

    <!-- CAROUSEL -->
    <div id="carouselExampleSlidesOnly " class="carousel slide " data-bs-ride="carousel ">
        <div class="carousel-inner ">
            @php
                $urutan_slide = 1;
            @endphp
            @foreach (json_decode($banner_beranda->value, true) as $item)
                <div class="carousel-item @if($urutan_slide == 1) active @endif">
                    <img src="{{url('/img' . '/' . $item)}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption" id="carouselcaption">
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

    <!-- INFORMASI -->
    <div class="container-fluid pt-5 " style="background-color: #F6FAFD ">
        <center>
            <h1 style="text-align: center; font-weight: bold; ">BERITA ACARA</h1>
            <img class="img-fluid " src="{{url('new_design/bahan/line.png')}}">
        </center>
        <div class="container p-5">
            <div class="scroll">
                <div class="row g-4 p-5 justify-content-center " style="background:linear-gradient(#a80000, #630000);">
                    
                    @foreach ($informasi as $i)
                    <div class="col-lg-4 col-md-6 ">
                        <div class="card h-100 ">
                            <img src="{{url('img/artikel'.'/' . $i->gambar)}}" class="card-img-top " alt="... ">
                            <a href="{{route('informasi.baca', $i->slug)}}" class="link ">
                                <div class="card-body ">
                                    <h5 class="card-title carousel_text ">
                                        {{$i->judul}}
                                    </h5>
                                    <p class="card-text carousel_text ">
                                        {{ Str::limit($i->isi, 90, '...') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- INFORMASI -->

    @include('layouts.base_footer')

    <!-- Navbar JS -->
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {
            scrollFunction()
        };

        $('#carouselcaption').hide();
        $(document).ready(function () {
            setTimeout(() => {
                $('#carouselcaption').slideDown(1000);
            }, 500);
        });

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                document.getElementById("navbar").style.backgroundColor = "#630000";
            } else {
                document.getElementById("navbar").style.backgroundColor = "transparent";
            }
        }
    </script>
    <!-- Navbar JS -->
</body>

</html>

</html>