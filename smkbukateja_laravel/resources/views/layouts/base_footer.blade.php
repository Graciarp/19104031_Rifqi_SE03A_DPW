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
                        <a href="mailto:admin@smkn1bukateja.sch.id" class="text-secondary footer-link" style="text-decoration: none;">Email : admin@smkn1bukateja.sch.id</a>
                    </li>
                    <li>
                        <a href="tel:0286476110" class="text-secondary footer-link" style="text-decoration: none;">Telp/Fax. (0286)476110</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <h5 class="text-center">Menu</h5>
                <ul style="font-size: 14px; list-style: none;">
                    <li>
                        <a href="{{url('/')}}" class="text-secondary footer-link" style="text-decoration: none;">Beranda</a>
                    </li>
                    <li>
                        <a href="{{url('/profil')}}" class="text-secondary footer-link" style="text-decoration: none;">Profil Sekolah</a>
                    </li>
                    <li>
                        <a href="{{url('/informasi')}}" class="text-secondary footer-link" style="text-decoration: none;">Informasi</a>
                    </li>
                    <li>
                        <a href="{{url('/informasi')}}" class="text-secondary footer-link" style="text-decoration: none;">Prestasi</a>
                    </li>
                    <li>
                        <a href="{{url('/hubungi-kami')}}" class="text-secondary footer-link" style="text-decoration: none;">Hubungi Kami</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}" class="text-secondary footer-link" style="text-decoration: none;">Login</a>
                    </li>
                    <li>
                        <a target="_blank" href="{{url('/sitemap')}}" class="text-secondary footer-link" style="text-decoration: none;">Sitemap</a>
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

    $(document).ready(function () {
            setTimeout(() => {
                $('#preloaderLayer').fadeOut();
            }, 1000);
        });

    $(".backtotop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
    });

    // Fitur Title Berjalan
    // (function titleScroller(text) {
    //         document.title = text;
    //         setTimeout(function () {
    //             titleScroller(text.substr(1) + text.substr(0, 1));
    //         }, 500);
    //     }(" SMK Negeri 1 Bukateja Purbalingga"));
</script>
<!-- Back to top JS -->

