<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Login | {{config('app.name')}} 
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        body, html {
            overflow: hidden !important;
        }
        .background {
            background-image: url("{{url('new_design/bahan/carousel-3.png')}}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
            min-height: 100vh;
        }

        .overlay_hitam { 
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
        }

        .flex_tengah {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%
            height: 100vh
        }
    </style>
</head>
<body>
    <div class="container-fluid background px-0">
        <div class="overlay_hitam flex_tengah">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="loadingSection">
                            <img src="{{url('new_design/bahan/loading.gif')}}" width="200px" alt="" srcset="">
                        </div>

                        <div class="card border-0 rounded-0" id="loginCard">
                            <div class="card-header text-white px-2 py-3" style="background-color: #630000">
                                <h5>Silahkan Login</h5>
                            </div>
                            <div class="card-body py-4">
                                <form action="{{ route('login') }}" method="post" id="loginForm">
                                    @csrf
                                    <input type="email" name="email" required class="form-control" placeholder="Masukan Email" id="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input type="password" name="password" required class="form-control mt-3" placeholder="Masukan Kata Sandi" id="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <button id="submitBtn" class="btn text-white mt-3 float-right" style="background-color: #630000" type="submit">
                                        Masuk
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#loginCard, #loadingSection").hide();
        $(function () {
            $("#loginCard").slideDown(1000);
        });

        $('#submitBtn').click(function (e) { 
            e.preventDefault();
            var email = $('#email').val();
            var password = $('#password').val();

            if (email && password) {
                $("#loginCard").slideUp(1000);

                setTimeout(() => {
                    $('#loadingSection').show();
                }, 1000);

                setTimeout(() => {
                    $("#loginForm").submit();
                }, 3000);

            }

        });
    </script>
</body>
</html>