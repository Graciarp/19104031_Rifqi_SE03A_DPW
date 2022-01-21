@php
    // import model
    use App\Models\beranda as berandaModel;
    use App\Models\testimoni as testiModel;
    // memanggil data dari model
    $namaSekolah=berandaModel::where('key', 'nama_sekolah')->first();
    $slogan=berandaModel::where('key', 'slogan')->first();
    $visi=berandaModel::where('key', 'visi')->first();
    $misi=berandaModel::where('key', 'misi')->first();
    $banner_beranda=berandaModel::where('key', 'banner_beranda')->first();
    $testimoni=testiModel::all();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css-external/homepage-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/d2e84c86a6.js" crossorigin="anonymous"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.min.js"></script>


    <title>SKANSIKA</title>

</head>

<body>
    @include('navbar')

    <!-- CARAOSEL -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                {{-- {!!($banner_beranda)!!} --}}
                <img src="{{url('img' . '/' . $banner_beranda->value)}}" class="d-block w-100" alt="...">
            </div>
            <!-- <div class="carousel-item">
                <img src="img/gerbang sekolah.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/siswaa.png" class="d-block w-100" alt="...">
            </div> -->

            <div class="caption-carousel">
                <h3>SELAMAT DATANG DI</h3>
                <p class="nama-smk">{{$namaSekolah->value}}</p>
                <p class="desc">{{$slogan->value}}</p>

                <button type="button" class="btn btn-danger"
                    style="border-radius: 15px; background-color: #E82329; border: 0px;">
                    <a href="profil.html">Selengkapnya &nbsp;<img src="img/panah.png" alt=""
                            style="display: inline-block;"></a>
                </button>

            </div>


        </div>
    </div>
    <!-- CAROUSEL -->

    <!-- visi misi -->
    <div class="seksi-visi-misi">
        <div class="container vismis" style="margin-bottom: 100px;">
            <div class="row baris-vismis">
                <div class="col-md-6 div-visi">
                    <h2 class="isi-vismis">VISI</h2>
                    <p class="isi-vismis isi-visi">{{$visi->value}}</p>
                </div>
                <div class="col-md-6 div-misi text-white">
                    <h2 class="isi-vismis">MISI</h2>
                    {{-- mencetak kode html dari tabel --}}
                    {!!($misi->value)!!}
                    {{-- <ul class="list-isi-vismis">
                        <li>Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif
                            berorientasi pada kompetensi pendidikan nasional.</li>
                        <li>Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di
                            dunia kerja.</li>
                        <li>Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan
                            berwawasan lingkungan sekolah.</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- visi misi -->

    <!-- program keahlian  -->
    <!-- <div class="container border-1">
        <div class="title-guru-karyawan">
            <div class="judul-tengah">
                <h1><b>Program Keahlian</b></h1>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="card-carousel">
        <div class="my-card"></div>
        <div class="my-card"></div>
        <div class="my-card"></div>
        <div class="my-card"></div>
        <div class="my-card"></div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
    </script>
    <script>
        $num = $('.my-card').length;
        $even = $num / 2;
        $odd = ($num + 1) / 2;

        if ($num % 2 == 0) {
            $('.my-card:nth-child(' + $even + ')').addClass('active');
            $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
            $('.my-card:nth-child(' + $even + ')').next().addClass('next');
        } else {
            $('.my-card:nth-child(' + $odd + ')').addClass('active');
            $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
            $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
        }

        $('.my-card').click(function () {
            $slide = $('.active').width();
            console.log($('.active').position().left);

            if ($(this).hasClass('next')) {
                $('.card-carousel').stop(false, true).animate({
                    left: '-=' + $slide
                });
            } else if ($(this).hasClass('prev')) {
                $('.card-carousel').stop(false, true).animate({
                    left: '+=' + $slide
                });
            }

            $(this).removeClass('prev next');
            $(this).siblings().removeClass('prev active next');

            $(this).addClass('active');
            $(this).prev().addClass('prev');
            $(this).next().addClass('next');
        });


        // Keyboard nav
        $('html body').keydown(function (e) {
            if (e.keyCode == 37) { // left
                $('.active').prev().trigger('click');
            } else if (e.keyCode == 39) { // right
                $('.active').next().trigger('click');
            }
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script> -->
    <!-- program keahlian -->


    <!-- guru dan karyawan -->
    <!--Library CSS buat animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <div class="container" style="margin-bottom:100px;">
        <div class="container border-1">
            <div class="title-guru-karyawan">
                <div class="judul-tengah">
                    <h1><b>Guru dan Karyawan</b></h1>
                </div>
            </div>
        </div>
        <br> <br>

        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300">
                    <div class="box-guru-karyawan">
                        <img class="profile-p" src="img/photo-1491780499145-c497fbe6d1b3.jpeg">

                        <h3 class="nama-pekerjaan">Guru</h3>

                        <button class="tombol-guru-karyawan">Selengkapnya
                            <i class="fas fa-chevron-circle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-offset="300">
                    <div class="box-guru-karyawan ">
                        <img class="profile-p" src="img/photo-1491780499145-c497fbe6d1b3.jpeg">

                        <h3 class="nama-pekerjaan">Kepala & Wakil Sekolah</h3>

                        <button class="tombol-guru-karyawan">Selengkapnya
                            <i class="fas fa-chevron-circle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300">
                    <div class="box-guru-karyawan">
                        <img class="profile-p" src="img/photo-1491780499145-c497fbe6d1b3.jpeg">

                        <h3 class="nama-pekerjaan">Staff & Karyawan</h3>

                        <button class="tombol-guru-karyawan">Selengkapnya
                            <i class="fas fa-chevron-circle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- kata alumni -->
    <div class="container" style="margin-bottom: 100px;">
        <div class="container border-1">
            <div class="kataalumni">
                <div class="judul">
                    <h1><b>Kata Alumni</b></h1>
                </div>
            </div>
        </div>
        <br> <br>

        <!-- kata alumni -->
        <div class="container">
            <div class="row">
                @foreach ($testimoni as $k)

                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <!-- <div class="display"> -->
                    <div class="testi 1">
                        <div class="person">
                            <div class="nama">
                                <img src="{{url('img' . '/' . $k->foto)}}" class="d-block" width="100px" alt="...">
                                <h3>
                                    {{$k->nama}}
                                </h3>
                                <h4>
                                    {{$k->posisi}}
                                </h4>
                                <p>
                                    {{$k->teks}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- </div> -->
                {{-- <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="testi 2">
                        <div class="person">
                            <div class="nama">
                                <img src="img/Ya.jpg" alt="gambar">
                                <h3>
                                    Fauziyah
                                </h3>
                                <h4>
                                    Kuliah di IT Telkom Purwokerto
                                </h4>
                                <p>
                                    Saya menemukan banyak pengalaman disini. Guru-guru yang menyenangkan,
                                    teman-teman yang seru, fasilitas lab yang lengkap.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="testi 3">
                        <div class="person">
                            <div class="nama">
                                <img src="img/Ya.jpg" alt="gambar">
                                <h3>
                                    Fauziyah
                                </h3>
                                <h4>
                                    Bekerja di PT. Telkom Indonesia
                                </h4>
                                <p>
                                    Saya menemukan banyak pengalaman disini. Guru-guru yang menyenangkan,
                                    teman-teman yang seru, fasilitas lab yang lengkap.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- kata alumni -->

        <!-- kata alumni -->
        <br>
        <br>
        <br>



        <!-- navbar code here -->

        <!-- navbar code here -->

        <!--Library JS buat animasi -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- guru dan karyawan -->


</body>

@include('footer')

</html>
