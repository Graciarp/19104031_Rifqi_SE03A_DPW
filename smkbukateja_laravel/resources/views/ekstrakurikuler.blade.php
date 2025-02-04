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

    <title>{{strtoupper($ekstrakurikuler->judul)}} | SMK Negeri 1 Bukateja</title>
</head>

<body style="font-family: Poppins;">

    @include('layouts.preloader')

    <!-- NAVBAR -->
    <nav @if(Agent::isMobile()) style="background-color: #630000;" @endif class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
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

    @if(Agent::isMobile())
        <div style="height: 47px">

        </div>
    @endif

    <!-- CAROUSEL -->
    <div id="carouselExampleSlidesOnly " class="carousel slide " data-bs-ride="carousel ">
        <div class="carousel-inner ">
            @php
                $urutan_slide = 1;
            @endphp
            @foreach (json_decode($banner_beranda->value, true) as $item)
                <div class="carousel-item @if($urutan_slide == 1) active @endif">
                    <img src="{{url('/img' . '/' . $item)}}" class="d-block w-100" alt="...">
                    @if(Agent::isDesktop() or Agent::isTablet())
                    <div class="carousel-caption" id="carouselcaption">
                        <font style="font-family: Poppins;">
                            <h4>Selamat Datang di</h4>
                            <h1 style="font-weight: bold;">
                                {{strtoupper($ekstrakurikuler->judul)}} SMK Negeri 1 Bukateja
                            </h1>
                            <p>
                                {{$ekstrakurikuler->deskripsi}}
                            </p>

                            <br><br><br>
                        </font>
                    </div>
                    @endif
                </div>    

                @php
                    $urutan_slide++;
                @endphp
            @endforeach
        </div>
    </div>
    <!-- CAROUSEL -->

    <div class="container-fluid">
        <!-- ISI -->
        <div class="container px-0 bg-light" style="margin-top: 2em; margin-bottom:3em; border-radius: 10px; box-shadow: 4px 4px 4px rgba(0, 0, 2, 0.5);">
            <div class="container pt-5" style="background-color: #A80000; border-radius: 10px 10px 0px 0px">
                <div></div>
            </div>
            <!-- JUDUL -->
            <div class="container-fluid p-5">
                <h1 style="font-weight: bold; text-align: center;">SEJARAH {{strtoupper($ekstrakurikuler->judul)}} SKANSIKA</h1>
            </div>
            <!-- JUDUL -->

            <!-- SEJARAH -->
            <div class="container">
                <center>
                    <img class="img-fluid w-25" src="{{url('img/ekstrakurikuler' . '/' . $ekstrakurikuler->image)}}" style="border-radius: 5px;">

                    <br><br>

                    <div class="container px-5 ">
                        <p style="text-align: justify; ">
                            {{$ekstrakurikuler->sejarah ?? '-'}}
                        </p>
                    </div>
                </center>
            </div>
            <!-- SEJARAH -->

            @if($kegiatanEkstra and $kegiatanEkstraFirst)
            <!-- KEGIATAN -->
            <div class="container-fluid px-0">
                <div class="container-fluid pt-5">
                    <div class="rec-pk">Kegiatan {{strtoupper($ekstrakurikuler->judul)}} SKANSIKA</div>
                </div>
                <div class="container">
                    <div class="row pt-4 px-5">
                        <div class="img-card col-6-a">
                            <img class="img-fluid" id="gambarKegiatanEkstra" src="{{url('img/kegiatanekstra' . '/' . $kegiatanEkstraFirst->gambar)}}" style="border-radius: 3px; ">
                        </div>
                        <div class="col-6-a ">
                            <div class="row " style="background-color: #A80000; border-radius: 5px; ">
                                <ul class="nav justify-content-center ">
                                    @foreach ($kegiatanEkstra as $k)
                                    <li class="nav-item ">
                                        <a style="cursor: pointer" onclick="ekstra{{str_replace(' ', '_', $k->judul)}}()" class="nav-link link-eskul">
                                            {{$k->judul}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <br/>
                            <div class="row ">
                                <div class="col p-3 " style="border: 2px solid#A80000; border-width: 2px; border-radius: 5px; ">
                                    <p id="deskripsiKegiatanEkstra" style="text-align: justify; ">
                                        {{$kegiatanEkstraFirst->deskripsi}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- KEGIATAN -->
            @endif

            <br/>

            <!-- PRESTASI YANG DIRAIH -->
            {{-- <div class="container-fluid pt-5 px-0">
                <div class="rec-pk">Prestasi yang Diraih</div>
            </div>
            <div class="container pb-5">
                <div class="scroll container" style="height: 600px; ">
                    <div class="row px-5 pt-3 justify-content-center d-flex ">
                        <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3 ">
                            <div class="card h-100 ">
                                <img src="bahan/tkj-1.JPG " class="card-img-top " alt="... ">
                                <a href="# " class="link ">
                                    <div class="card-body ">
                                        <h5 class="card-title carousel_text ">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text " style="text-align: justify; ">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3 ">
                            <div class="card h-100 ">
                                <img src="bahan/tkj-1.JPG " class="card-img-top " alt="... ">
                                <a href="# " class="link ">
                                    <div class="card-body ">
                                        <h5 class="card-title carousel_text ">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text " style="text-align: justify; ">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3 ">
                            <div class="card h-100 ">
                                <img src="bahan/tkj-1.JPG " class="card-img-top " alt="... ">
                                <a href="# " class="link ">
                                    <div class="card-body ">
                                        <h5 class="card-title carousel_text ">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text " style="text-align: justify; ">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3 ">
                            <div class="card h-100 ">
                                <img src="bahan/tkj-1.JPG " class="card-img-top " alt="... ">
                                <a href="# " class="link ">
                                    <div class="card-body ">
                                        <h5 class="card-title carousel_text ">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text " style="text-align: justify; ">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 px-3 pt-2 pb-3 ">
                            <div class="card h-100 ">
                                <img src="bahan/tkj-1.JPG " class="card-img-top " alt="... ">
                                <a href="# " class="link ">
                                    <div class="card-body ">
                                        <h5 class="card-title carousel_text ">Teknisi Jaringan</h5>
                                        <p class="card-text carousel_text " style="text-align: justify; ">Prospek kerja yang paling pertama tentunya menjadi seorang teknisi. Tugas teknisi adalah melakukan perbaikan atau pembangunan ...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- PRESTASI YANG DIRAIH -->

            <div class="container pt-5" style="background-color: #A80000; border-radius: 0px 0px 10px 10px;">
                <div></div>
            </div>
        </div>
    </div>

    @include('layouts.base_footer')

    <script>
        $('#carouselcaption').hide();
        $(document).ready(function () {
            setTimeout(() => {
                $('#carouselcaption').slideDown(1000);
            }, 500);
        });

        @if(Agent::isDesktop() or Agent::isTablet())

        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {
            scrollFunction()
        };
        

        function scrollFunction() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                document.getElementById("navbar").style.backgroundColor = "#630000";
            } else {
                document.getElementById("navbar").style.backgroundColor = "transparent";
            }
        }

        @endif

        @foreach ($kegiatanEkstra as $k)
            function ekstra{{str_replace(' ', '_', $k->judul)}}() {
                $('#gambarKegiatanEkstra').attr('src', '{{url('img/kegiatanekstra' . '/' . $k->gambar)}}');
                $("#deskripsiKegiatanEkstra").text("{{$k->deskripsi}}");
            }
        @endforeach
    </script>
</body>

</html>

</html>