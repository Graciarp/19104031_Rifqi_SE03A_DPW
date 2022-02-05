<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard - {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="{{url('/')}}/css/bootstrap3.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{url('/')}}/css/font-awesome.css" rel="stylesheet">
    <link href="{{url('/')}}/css/style.css" rel="stylesheet">
    <link href="{{url('/')}}/css/pages/dashboard.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{url('/')}}/js/jquery-1.7.2.min.js"></script> --}}
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style>
        body {
            overflow-x: hidden; 
        }
        
        input, textarea {
            width: 100%
        }

        .main {
            border-bottom: 0px !important
        }

        .bg-white {
            background-color: white !important
        }

        .table-responsive {
            overflow-x: auto;
            width: 100%;
        }

        .btn-navbar {
            background-color: transparent !important;
            background-image: none !important;
            border: 1px solid white
        }

        .navbar, .navbar-inner {
            background-color: #630000 !important;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container"> 
                <a id="menuTogglerBtn" class="btn btn-navbar">
                    <span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> 
                </a>
                @if(Agent::isDesktop())
                <a class="brand" href="/"> {{config('app.name')}} </a>
                @else 
                <a class="brand" href="/home"> {{config('app.name')}} </a>
                @endif
                <!--/.nav-collapse -->
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>

    <!-- /navbar -->
    <div id="subnavbarMenu" class="subnavbar" style="z-index: 9999; position: absolute; width: 100%">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li><a href="/home"><i class="icon-dashboard"></i><span>Dashboard</span> </a></li>
                    <li><a href="/informasi/index"><i class="icon-list-alt"></i><span>Berita</span> </a> </li>
                    <li><a href="/prestasi/index"><i class="icon-bar-chart"></i><span>Prestasi</span> </a> </li>
                    <li><a href="/manajemenAdmin"><i class="icon-group"></i><span>Manajemen Admin</span> </a> </li>
                    <li><a href="/gurukaryawan/index"><i class="icon-group"></i><span>Guru Karyawan</span> </a> </li>
                    <li><a href="/beranda/index"><i class="icon-cog"></i><span>Setting Beranda</span> </a> </li>
                    <li><a href="/testimoni/index"><i class="icon-th-list"></i><span>Testimoni</span> </a> </li>
                    <li><a href="/profilsekolah/index"><i class="icon-th-large"></i><span>Profil Sekolah</span> </a> </li>
                    <li><a href="/keluar"><i class="icon-off"></i><span>Logout</span> </a> </li>
                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /subnavbar-inner -->
    </div>
    <!-- /subnavbar -->
    <div class="main">
        <div class="main-inner" id="kontenHalamanAdmin">
            <div class="container">

                @if(Agent::isDesktop())
                    <br><br><br>
                @endif

                <br>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif

                @yield('content')
            </div>
            <!-- /container -->
        </div>
        <!-- /main-inner -->
    </div>
    <!-- /extra -->
    {{-- <div class="footer">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="span12"> &copy; {{date('Y')}} <a href="/">Powered by Team Romusha</a>. </div>
                    <!-- /span12 -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /footer-inner -->
    </div> --}}
    <!-- /footer -->
    <!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="{{url('/')}}/js/excanvas.min.js"></script>
    <script src="{{url('/')}}/js/chart.min.js" type="text/javascript"></script>
    <script src="{{url('/')}}/js/bootstrap.js"></script>
    <script language="javascript" type="text/javascript" src="{{url('/')}}/js/full-calendar/fullcalendar.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/e5rowkqsm3ew4m2qci6nsv9xr2s67nbyc14ay7uf61vjrb2j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{url('/')}}/js/base.js"></script>

    @if(Agent::isMobile())
    <script>
        $('#subnavbarMenu').hide();
        $('#menuTogglerBtn').click(function (e) { 
            e.preventDefault();
            $('#subnavbarMenu').slideToggle();
        });
    </script>
    @endif

    {{-- <script>
        tinymce.init({
            height: '500',
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
        });
    </script>     --}}
</body>

</html>
