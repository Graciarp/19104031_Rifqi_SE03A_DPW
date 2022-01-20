@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Tambah Data Prestasi    
                    </h4>    
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('prestasi.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                            </div>
                        </div>

                        <div class="">
                            <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>
                            <div class="col-md-6">     
                                <textarea required name="isi" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
                            <div class="col-md-6">     
                                <input required type="file" name="gambar" accept=".jpg, .png" id="">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
