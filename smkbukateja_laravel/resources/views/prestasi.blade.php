@php
    use App\Models\prestasi;

    $prestasiTerbaru = prestasi::orderBy('created_at', 'desc')->first();
    $prestasi = prestasi::all();
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
    <title> Prestasi SMK Negeri 1 Bukateja </title>
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
    <div class="container-fluid p-3 pb-5">
        <br/><br/>
        <div class="container" style="background-color: #F6FAFD; border-radius: 20px; margin-top: 0.75em; box-shadow: 4px 4px 4px rgba(0, 0, 1.2, 0.5);">
            <!-- CAROUSEL -->
            <div class="container p-5">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @php
                            $nourut = 1
                        @endphp
                        @foreach ($prestasi as $p)
                        <div class="carousel-item @if($nourut == 1) active @endif">
                            <img src="{{url('img/prestasi' . '/' . $p->gambar)}}" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 style="font-weight: bold;">
                                    {{$p->judul}}
                                </h3>
                                <p>
                                    {{$p->isi}}
                                </p>
                            </div>
                        </div>

                        @php
                            $nourut++
                        @endphp
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- CAROUSEL -->

            <!-- PRESTASI -->
            <div class="container-fluid p-0 pt-4">
                <div class="rec-pk">Prestasi SMK Negeri 1 Bukateja</div>
                <div class="container pt-5">
                    <div class="scroll">
                        <div class="row px-5 justify-content-center d-flex">

                            @foreach ($prestasi as $p)
                            <div class="col-lg-4 col-md-6 px-3 pt-2 pb-3">
                                <div class="card h-100">
                                    <img src="{{url('img/prestasi' . '/' . $p->gambar)}}" class="card-img-top" alt="...">
                                    <a href="#" class="link">
                                        <div class="card-body">
                                            <h5 class="card-title carousel_text">
                                                {{$p->judul}}
                                            </h5>
                                            <p class="card-text carousel_text" style="text-align: justify;">
                                                {{$p->isi}}
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>

                <br><br>
            </div>
        </div>
    </div>
    <!-- PRESTASI -->
    <!-- COLUMN 1 -->

    @include('layouts.base_footer')
</body>

</html>

</html>