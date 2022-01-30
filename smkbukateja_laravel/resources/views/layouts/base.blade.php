<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="{{url('/')}}/new_design/bootstrap_5_1_3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/new_design/bootstrap_5_1_3/css/bootstrap.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="{{url('/')}}/new_design/bootstrap_5_1_3/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/new_design/bootstrap_5_1_3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- css manual -->
    <link href="{{url('/')}}/new_design/style.css" rel="stylesheet" type="text/css">
    <!-- font -->
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="icon " href="{{url('/')}}/new_design/bahan/Logo.png ">
    <!-- title -->
    <title> SMK Negeri 1 Bukateja </title>
</head>

<body style="font-family: Poppins; ">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container-fluid justify-content-end px-5">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav" style="font-size: 14px;">
                    <li class="nav-item active">
                        <a class="nav-link navigasi-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navigasi-link" href="/profil">Profil Sekolah</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navigasi-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    Program Keahlian
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Desain Permodelan dan Informasi Bangunan</a>
                            <a class="dropdown-item" href="#">Tata Busana</a>
                            <a class="dropdown-item" href="#">Teknik Kendaraan Ringan dan Otomotif</a>
                            <a class="dropdown-item" href="#">Teknik Komputer dan Jaringan</a>
                            <a class="dropdown-item" href="#">Multimedia</a>
                            <a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a>
                            <a class="dropdown-item" href="#">Teknik Body Otomotif</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navigasi-link" href="#">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navigasi-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                    Informasi
                      </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Berita Acara</a>
                            <a class="dropdown-item" href="#">Kegiatan Siswa</a>
                            <a class="dropdown-item" href="#">Lain - Lain</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navigasi-link" href="#">Prestasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    <!-- CONTENT -->
        @yield('content')
    <!-- CONTENT -->

    <!-- FOOTER -->
    <div class="container-fluid p-5" style="background-color: #630000; color:#FFF">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-center">
                    <img src="{{url('/')}}/new_design/bahan/Logo.png" width="50%">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <h5 class="text-center">Kontak</h5>
                    <ul style="font-size: 14px; list-style: none;">
                        <li>
                            <a href="#" class="text-secondary footer-link" style="text-decoration: none;">Email : admin@smkn1bukateja.sch.id</a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary footer-link" style="text-decoration: none;">Telp/Fax. (0286)476110</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <h5 class="text-center">Menu</h5>
                    <ul style="font-size: 14px; list-style: none;">
                        <li>
                            <a href="#" class="text-secondary footer-link" style="text-decoration: none;">Program Keahlian</a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary footer-link" style="text-decoration: none;">Ekstrakurikuler</a>
                        </li>
                        <li>
                            <a href="#" class="text-secondary footer-link" style="text-decoration: none;">Informasi</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="text-center">Peta Sekolah</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.348088010624!2d109.42078471500977!3d-7.426676494641882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65572a528cddab%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sen!2sid!4v1643293554375!5m2!1sen!2sid"
                        width="100%" style="border-radius:5px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->

    <!-- BACK TO TOP -->
    <img src="{{url('/')}}/new_design/bahan/top.png" class="backtotop">
    <!-- BACK TO TOP -->

    <!-- Back to top JS -->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('.backtotop').fadeIn();
            } else {
                $('.backtotop').fadeOut();
            }
        });

        $(".backtotop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });
    </script>
    <!-- Back to top JS -->

    <!-- Navbar JS -->
    <script>
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
    </script>
</body>

</html>