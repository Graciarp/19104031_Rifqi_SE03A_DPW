{{-- Css File for base file --}}

<!-- bootstrap -->
<link href="{{url('/')}}/new_design/bootstrap_5_1_3/css/bootstrap.min.css" rel="stylesheet">
<link href="{{url('/')}}/new_design/bootstrap_5_1_3/css/bootstrap.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<link href="{{url('/')}}/new_design/style.css" rel="stylesheet" type="text/css">

<!-- icon -->
<link rel="icon " href="{{url('/')}}/new_design/bahan/Logo.png">
<link rel="apple-touch-icon" href="{{url('/')}}/new_design/bahan/Logo.png">

@if(Agent::isMobile())
<style>
    .navbar-collapse {
        height: 100vh;
    }
</style>
@endif