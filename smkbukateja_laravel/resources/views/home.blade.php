@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="well">
                <h3>Selamat datang</h3>
                Selamat datang {{Auth::user()->name}} di halaman admin. Silahkan pilih navigasi diatas untuk menuju kehalaman yang diinginkan
            </div>
        </div>
    </div>
</div>
@endsection
