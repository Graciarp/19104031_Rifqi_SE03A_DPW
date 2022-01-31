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

    <!-- title -->
    <title>SMK Negeri 1 Bukateja</title>
</head>

<body style="font-family: Poppins; ">

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

    <!-- CONTENT -->
        @yield('content')
    <!-- CONTENT -->

    <!-- FOOTER -->
    @include('layouts.base_footer')
    <!-- FOOTER -->

    <!-- Navbar JS -->
    @if(Agent::isDesktop() or Agent::isTablet())
    <script>
        // When the user scrolls down 80px from the top of the document, 
        // resize the navbar's padding and the logo's font size
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
    @endif
</body>

</html>