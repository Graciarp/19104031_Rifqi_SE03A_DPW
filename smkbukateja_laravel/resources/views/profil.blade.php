@php
    // import profilkolah
    use App\Models\profilSekolah as profilsekolahmodel;
    // memanggil data sejarah singkat
    $sejarah=profilsekolahmodel::where('key', 'sejarah_singkat')->first();
    $visi=profilsekolahmodel::where('key', 'visi')->first();
    $misi=profilsekolahmodel::where('key', 'misi')->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css-external/homepage-style.css">
    <link rel="stylesheet" href="css-external/profile-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- NAVBAR -->
    @include('navbar')
    <!-- NAVBAR -->
    <br>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner container lebar">
            <div class="carousel-item active">
                <img src="img/Profil/profil1.JPG" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/Profil/profil1.JPG" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/Profil/profil1.JPG" alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="btn btn-danger carousel-control-prev-icon" style="border-radius: 50%;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="btn btn-danger carousel-control-next-icon" style="border-radius: 50%;"></span>
        </button>
    </div>
    <!-- Carousel -->

    <br>

    <!-- sejarah singkat -->
    <div class="container">
        <div class="container border-1">
            <div class="title-guru-karyawan">
                <div class="judul-tengah">
                    <h1><b>Sejarah Singkat</b></h1>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6" style="text-align: justify;">
                {{-- SMK Negeri 1 Bukateja berdiri pada bulan maret pada tahun 2004 berdasar pada Keputusan Bupati
                Purbalingga No. 36 Tahun 2004 Tentang penyelenggaraan SMK dan Program SMK Kelas Jauh di Purbalingga
                dengan Program Keahlian Teknik Perkayuan, Kemudian dikeluarkan Peraturan Bupati N0. 24 Tahun 2007 pada
                tanggal 21 April 2007 tentang pembentukan Sekolah Menengah Kejuruan Negeri 1 Bukateja dengan perubahan
                dan Penambahan Program Keahlian Teknik Gambar Bangunan dan Tata Busana. Pada Tahun 2008 pada bulan April
                dibuka kembali Program Keahlian Teknik Mekanik Otomotif. --}}
                {!!($sejarah->value)!!}
            </div>
            <div class="col-lg-6">
                <img src="https://asset.kompas.com/crops/g772kCQ23eQxRvRPy_ioxawRfsg=/123x25:900x543/750x500/data/photo/2017/05/02/2972586768.jpg"
                    height="340px" alt="" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
    <!-- sejarah singkat -->
    <br>
    <br>
    <br>

    <!-- Visi Misi -->
    <div class="container">
        <div class="row text-white" style="text-align: center;">
            <div class="col-lg-5 p-4" style="background-color: #E82329;">
                <h1 class="isi-vismis">Visi</h1>
                <p class="isi-vismis isi-visi">{{$visi->value}}</p>
            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-5 p-4" style="background-color: #E82329;">
                <h1>Misi</h1>
                {!!($misi->value)!!}
                {{-- <ul style="text-align: justify;">
                    <li>
                        Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif
                        berorientasi pada kompetensi pendidikan nasional.
                    </li>
                    <li>
                        Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di dunia
                        kerja.
                    </li>
                    <li>
                        Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan
                        berwawasan lingkungan sekolah.
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
    <!-- Visi Misi -->
    <br>
    <br>
    <br>

    <!-- Struktur Organisasi -->
    <div class="container">
        <div class="container border-1">
            <div class="title-guru-karyawan">
                <div class="judul-tengah">
                    <h1><b>Struktur Organisasi</b></h1>
                </div>
            </div>
        </div>
        <br>
        <!-- <img src="https://stiemitraindonesia.ac.id/upload/miw//struktur-organisasi.png" alt=""
            class="rounded mx-auto d-block"> -->
        <img src="img/struktur-organisasi.png" alt="struktur-organisasi" class="rounded mx-auto d-block" height="700px">
    </div>
    <!-- Struktur Organisasi -->
    <br>
    <br>
    <br>

    <!-- Peta Sekolah -->
    <div class="container">
        <div class="container border-1">
            <div class="title-guru-karyawan">
                <div class="judul-tengah">
                    <h1><b>Peta Sekolah</b></h1>
                </div>
            </div>
        </div>
        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.39092970486!2d109.42302!3d-7.426716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1637673631032!5m2!1sid!2sid"
            width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- Peta Sekolah -->
    <br>

</body>

@include('footer')

</html>
