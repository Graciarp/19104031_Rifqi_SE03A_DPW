@php
    use App\Models\gurudankaryawan;
    $kepsek = gurudankaryawan::where('jabatan', 'kepala_sekolah') -> first();
    $wakilkepsek = gurudankaryawan::where('jabatan', 'wakil_kepala_sekolah') -> first();
    $kepalaTU = gurudankaryawan::where('jabatan', 'kepala_tata_usaha') -> first();

    $guru = gurudankaryawan::whereNotIn('jabatan', ['kepala_sekolah', 'wakil_kepala_sekolah', 'kepala_tata_usaha', 'karyawan']) -> get();
    $karyawan = gurudankaryawan::where('jabatan', 'karyawan') -> get();
@endphp

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS External -->
    <link rel="stylesheet" href="/css_guru/style.css">
    <style>
        a {
            color: inherit;
            text-decoration: none;
        }

        a:hover {
            color: #ffc400;
        }
    </style>

    <title>Kepala & Wakil</title>
</head>

<body>
    <!-- NAVBAR -->
    @include('navbar')
    <!-- NAVBAR -->

    <!-- Hero -->
    <div class="hero">
        <img src="/img_guru/hero.png" alt="hero">
    </div>
    <!-- Hero -->

    <!-- content -->
    <div class="container">
        <!-- judul halaman -->
        {{-- <div class="tag">
            <p class="judul">Kepala & Wakil</p>
        </div> --}}
        <!-- judul halaman -->


        <!-- kepala sekolah -->
        <div class="kepala-sekolah part">
            <div class="photo">
                <figure>
                    <img src="{{url('img/guru_karyawan' . '/' . $kepsek->foto)}}" alt="kepala-sekolah" class="img-kepala-sekolah rounded-circle">
                    <figcaption class="mt-4 jabatan">Kepala Sekolah</figcaption>
                    <figcaption class="mt-1 nama">
                        {{$kepsek->nama}}
                    </figcaption>
                </figure>
            </div>
            <div class="sambutan">
                <h5>
                    Sambutan Kepala Sekolah
                </h5>
                <p>
                    {{$kepsek->sambutan}}
                </p>
            </div>
        </div>
        <!-- kepala sekolah -->

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <!-- wakil sekolah -->
                <div class="kepala-tu part">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/guru_karyawan' . '/' . $wakilkepsek->foto)}}" class="card-img-top rounded-circle" alt="kepala-tu">
                        <div class="card-body">
                            <h5 class="text-center card-title">Wakil Kepala Sekolah</h5>
                            <p class="text-center card-text">
                                {{$wakilkepsek->nama}}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- wakil sekolah -->
            </div>
            <div class="col-lg-6 col-sm-12">
                <!-- kepala tu -->
                <div class="kepala-tu part">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('img/guru_karyawan' . '/' . $kepalaTU->foto)}}" class="card-img-top rounded-circle" alt="kepala-tu">
                        <div class="card-body">
                            <h5 class="text-center card-title">Kepala Tata Usaha</h5>
                            <p class="text-center card-text">
                                {{$kepalaTU->nama}}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- kepala tu -->
            </div>
        </div>
        

        <div class="subKonten part">
            <div class="row">
                @foreach ($guru as $g)
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/guru_karyawan' . '/' . $g->foto)}}" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">
                            {{ ucwords(str_replace('_', " ", $g->jabatan)) }}
                        </h5>
                        <p class="text-center card-text">
                            {{$g->nama}}
                        </p>
                    </div>
                </div>
                @endforeach

                @foreach ($karyawan as $k)
                <div class="card" style="width: 18rem;">
                    <img src="{{url('img/guru_karyawan' . '/' . $k->foto)}}" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">
                            {{ ucwords(str_replace('_', " ", $k->jabatan)) }}
                        </h5>
                        <p class="text-center card-text">
                            {{$k->nama}}
                        </p>
                    </div>
                </div>
                @endforeach

                {{-- <div class="card" style="width: 18rem;">
                    <img src="/img_guru/man.png" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">Wakasek Kesiswaan</h5>
                        <p class="text-center card-text">Nama</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img_guru/man.png" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">Wakasek Humas Dudi</h5>
                        <p class="text-center card-text">Nama</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- content -->
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
