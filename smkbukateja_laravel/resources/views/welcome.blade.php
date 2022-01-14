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
                <img src="img/foto carousel 1.png" class="d-block w-100" alt="...">
            </div>
            <!-- <div class="carousel-item">
                <img src="img/gerbang sekolah.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/siswaa.png" class="d-block w-100" alt="...">
            </div> -->

            <div class="caption-carousel">
                <h3>SELAMAT DATANG DI</h3>
                <p class="nama-smk">SMK NEGERI 1 BUKATEJA</p>
                <p class="desc"> SMK Negeri 1 Bukateja merupakan salah satu Sekolah
                    Menengah Kejuruan di Kecamatan Bukateja, Kabupaten Purbalingga, Jawa Tengah. SMK ini merupakan
                    SMK rujukan yang menawakan 7 program kompetensi keahlian.</p>

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
                    <p class="isi-vismis isi-visi">Menjadikan SMK yang memiliki kompetensi, berkualitas, berdaya saing,
                        berwawasan lingkungan dan berakhlak mulia.</p>
                </div>
                <div class="col-md-6 div-misi">
                    <h2 class="isi-vismis">MISI</h2>
                    <ul class="list-isi-vismis">
                        <li>Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif
                            berorientasi pada kompetensi pendidikan nasional.</li>
                        <li>Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di
                            dunia kerja.</li>
                        <li>Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan
                            berwawasan lingkungan sekolah.</li>
                    </ul>
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
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                    <!-- <div class="display"> -->
                    <div class="testi 1">
                        <div class="person">
                            <div class="nama">
                                <img src="img/Ya.jpg" alt="gambar">
                                <h3>
                                    Fauziyah
                                </h3>
                                <h4>
                                    Kuliah di Universitas Telkom
                                </h4>
                                <p>
                                    Saya menemukan banyak pengalaman disini. Guru-guru yang menyenangkan,
                                    teman-teman yang seru, fasilitas lab yang lengkap.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
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
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
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
                </div>
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

<footer>
    <!-- Footer -->
    <div id="site-footer" class="footer" role="contentinfo" style="background-color: #DB292F;"">
        <div class=" container pt-2 pb-2">
        <div class="row text-white">
            <div class="col-lg-1 col-sm-12 col-md-3 p-lg-4">
                <img src="img/Logo SMK.png" height="50px" alt="">
            </div>
            <div class="col-lg-4 col-sm-12 col-md-3 p-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <h5><b>Kontak</b></h5>
                        <p>Email : <a href="mailto:admin@smkn1bukateja.sch.id">admin@smkn1bukateja.sch.id</a>
                            <br>Telp/Fax. <a href="tel:0286-476110">(0286) 476110</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <h2>
                            <a href="https://www.instagram.com/smkn1bukateja/"><i class="fa fa-instagram"></i>&nbsp;</a>
                            <a href="https://www.facebook.com/SMKNEGERI1BUKATEJAPBG"><i
                                    class="fa fa-facebook"></i>&nbsp;</a>
                            <a href=""><i class="fa fa-twitter"></i>&nbsp;</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-3 p-3">
                <div class="footer-nav">
                    <h5 class="section-title"><b>Menu</b></h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="index.html">Beranda</a>
                        </li>
                        <li>
                            <a href="profil">Profil Sekolah</a>
                        </li>
                        <li>
                            <a href="#">Program Keahlian</a>
                        </li>
                        <li>
                            <a href="#">Guru dan Karyawan</a>
                        </li>
                        <li>
                            <a href="prestasi">Prestasi</a>
                        </li>
                        <li>
                            <a href="informasi">Informasi</a>
                        </li>
                        <li>
                            <a href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-3 p-3">
                <h5 class="section-title"><b>Lokasi</b></h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3477758537724!2d109.4208317142061!3d-7.42671117521803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65572a528cddab%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1637638049203!5m2!1sid!2sid"
                    style="border:0; height: 200; width: 200px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->

    <!-- Copyright -->
    <div class="d-flex justify-content-center text-white" style="background-color: #B7292D;">
        <div class="p-2">Copyright © 2021 SMKN 1 BUKATEJA | Powered by Team Romusha</div>
    </div>
    <!-- Copyright -->
</footer>

</html>
