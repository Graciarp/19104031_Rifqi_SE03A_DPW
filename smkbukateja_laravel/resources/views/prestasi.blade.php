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
    @include('footer')

    <script src="js/main.js"></script>
</body>

</html>
