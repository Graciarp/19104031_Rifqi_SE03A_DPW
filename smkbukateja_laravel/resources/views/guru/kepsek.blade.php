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
        <div class="tag">
            <p class="judul">Kepala & Wakil</p>
        </div>
        <!-- judul halaman -->


        <!-- kepala sekolah -->
        <div class="kepala-sekolah part">
            <div class="photo">
                <figure>
                    <img src="/img_guru/man.png" alt="kepala-sekolah" class="img-kepala-sekolah rounded-circle">
                    <figcaption class="mt-4 jabatan">Kepala Sekolah</figcaption>
                    <figcaption class="mt-1 nama">Nama Kepala Sekolah</figcaption>
                </figure>
            </div>
            <div class="sambutan">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim eius dicta exercitationem praesentium ipsam porro, molestiae sed nesciunt aliquid, numquam repudiandae architecto nobis! Quidem beatae quasi sed error cupiditate velit, commodi
                    culpa, est, soluta quaerat corporis voluptate ut quas nam! Dolorem neque ratione debitis blanditiis deleniti reprehenderit cum inventore iste incidunt alias mollitia, odio suscipit eligendi dignissimos. Nobis dolore dolor quia aperiam
                    quasi modi dignissimos at placeat amet quae iure, itaque sapiente quidem omnis ratione magnam aut nihil a? Possimus fuga nam reiciendis. Omnis distinctio veritatis quos saepe, nemo a ut perspiciatis placeat quas impedit deserunt rem
                    blanditiis sed. Fuga.</p>
            </div>
        </div>
        <!-- kepala sekolah -->


        <!-- kepala tu -->
        <div class="kepala-tu part">
            <div class="card" style="width: 18rem;">
                <img src="/img_guru/man.png" class="card-img-top rounded-circle" alt="kepala-tu">
                <div class="card-body">
                    <h5 class="text-center card-title">Kepala Tata Usaha</h5>
                    <p class="text-center card-text">Nama Kepala Tata Usaha</p>
                </div>
            </div>
        </div>
        <!-- kepala tu -->

        <div class="subKonten part">
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="/img_guru/man.png" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">Wakasek Kurikulum</h5>
                        <p class="text-center card-text">Nama </p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img_guru/man.png" class="card-img-top rounded-circle" alt="subKonten">
                    <div class="card-body">
                        <h5 class="text-center card-title">Wakasek Sarpras</h5>
                        <p class="text-center card-text">Nama</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
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
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
    @include('footer')














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
