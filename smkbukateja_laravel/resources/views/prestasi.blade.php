@php
    use App\Models\prestasi;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestasi Sekolah</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css-external/homepage-style.css">
    <link rel="stylesheet" href="css-external/profile-style.css">
    <link rel="stylesheet" href="css-external/prestasi-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        a {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    @include('navbar')

    <!-- PRESTASI -->
    <div class="container-fluid prestasi">
        <div class="title-prestasi">
            <h1 class="item-title-prestasi">Prestasi</h1>
        </div>
        <div class="desc-prestasi">
            <p>Berikut ini adalah berbagai prestasi yang diraih oleh SMK Negeri 1 Bukateja</p>
        </div>
    </div>
    @php
        $prestasiTerbaru = prestasi::orderBy('created_at', 'desc')->first();
    @endphp
    <div class="container-fluid prestasi-pertama">
        <img src="{{url('img/prestasi' . '/' . $prestasiTerbaru->gambar)}}" class="img-fluid mx-auto d-block" width="650" alt="Prestasi">
        <p class="text-center">
            {{$prestasiTerbaru->judul}}
        </p>
    </div>

    <!-- GALERI PRESTASI -->
    <section class="gallery min-vh-100">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach (prestasi::all() as $p)
                    <div class="col text-center text-white">
                        <img src="{{url('img/prestasi' . '/' . $p->gambar)}}" class="gallery-item" alt="Prestasi">
                        <p class="t-prestasi">
                            {{$p->judul}}
                        </p>
                        <p>
                            <small>
                                {{$p->isi}}
                            </small>
                        </p>
                    </div>
                @endforeach
                {{-- <div class="col">
                    <img src="img/prestasi/prestasi.jpeg" class="gallery-item" alt="Prestasi">
                    <p class="t-prestasi">Juara 1 Artikel Provinsi Jawa Tengah</p>
                </div>
                <div class="col">
                    <img src="img/prestasi/prestasi.jpeg" class="gallery-item" alt="Prestasi">
                    <p class="t-prestasi">Juara 1 Artikel Provinsi Jawa Tengah</p>
                </div>
                <div class="col">
                    <img src="img/prestasi/prestasi.jpeg" class="gallery-item" alt="Prestasi">
                    <p class="t-prestasi">Juara 1 Artikel Provinsi Jawa Tengah</p>
                </div>
                <div class="col">
                    <img src="img/prestasi/prestasi.jpeg" class="gallery-item" alt="Prestasi">
                    <p class="t-prestasi">Juara 1 Artikel Provinsi Jawa Tengah</p>
                </div>
                <div class="col">
                    <img src="img/prestasi/prestasi.jpeg" class="gallery-item" alt="Prestasi">
                    <p class="t-prestasi">Juara 1 Artikel Provinsi Jawa Tengah</p>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- MODAL -->
    <div class="modal fade" id="gallery-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/prestasi/prestasi.jpeg" class="modal-img" alt="modal-img">
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- FOOTER -->
    <footer>
        <div id="site-footer" class="footer" role="contentinfo" style="background-color: #DB292F;"">
            <div class=" container pt-2 pb-2">
            <div class="row text-white">
                <div class="col-lg-1 col-sm-12 col-md-3 p-lg-4">
                    <img src="img/Logo SMK.png" height="50px" alt="">
                </div>
                <div class="col-lg-4 col-sm-12 col-md-3 p-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <h5>Kontak</h5>
                            <p>Email : <a href="mailto:admin@smkn1bukateja.sch.id">admin@smkn1bukateja.sch.id</a>
                                <br>Telp/Fax. <a href="tel:0286-476110">(0286) 476110</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <h2>
                                <a href="https://www.instagram.com/smkn1bukateja/"><i
                                        class="fa fa-instagram"></i>&nbsp;</a>
                                <a href="https://www.facebook.com/SMKNEGERI1BUKATEJAPBG"><i
                                        class="fa fa-facebook"></i>&nbsp;</a>
                                <a href=""><i class="fa fa-twitter"></i>&nbsp;</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3 p-3">
                    <div class="footer-nav">
                        <h5 class="section-title">Menu</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.html">Beranda</a>
                            </li>
                            <li>
                                <a href="profil.html">Profil Sekolah</a>
                            </li>
                            <li>
                                <a href="">Program Keahlian</a>
                            </li>
                            <li>
                                <a href="">Guru dan Karyawan</a>
                            </li>
                            <li>
                                <a href="prestasi.html">Prestasi</a>
                            </li>
                            <li>
                                <a href="">Informasi</a>
                            </li>
                            <li>
                                <a href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3 p-3">
                    <h5 class="section-title">Lokasi</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3477758537724!2d109.4208317142061!3d-7.42671117521803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65572a528cddab%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1637638049203!5m2!1sid!2sid"
                        style="border:0; height: 200; width: 200px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        </div>
        <!-- footer  -->


        <!-- Copyright -->
        <div class="d-flex justify-content-center text-white" style="background-color: #B7292D;">
            <div class="p-2">Copyright © 2021 SMKN 1 BUKATEJA | Powered by Team Romusha</div>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="js/main.js"></script>
</body>

</html>
