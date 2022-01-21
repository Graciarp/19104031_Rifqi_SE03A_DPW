@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Tambah Data Testimoni
                    </h4>
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('testimoni.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                            </div>
                        </div>

                        <div class="">
                            <label for="posisi" class="col-md-4 col-form-label text-md-right">{{ __('Posisi') }}</label>
                            <div class="col-md-6">
                                <textarea required name="posisi" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>
                            <div class="col-md-6">
                                <textarea required name="caption" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
                            <div class="col-md-6">
                                <input type="file" name="gambar" accept=".jpg, .png" id="">
                                <br>
                                <small>
                                    Upload gambar baru jika ingin mengganti gambar lama, kosongi jika tidak ingin mengganti gambar lama.
                                </small>
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
