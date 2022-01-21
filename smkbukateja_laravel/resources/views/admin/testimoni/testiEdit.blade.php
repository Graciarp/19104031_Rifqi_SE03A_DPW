@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Data Testimoni
                    </h4>
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('testimoni.update', $testimoni->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" style="width: 100%" value="{{$testimoni->nama}}" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                            </div>
                        </div>

                        <div class="">
                            <label for="posisi" class="col-md-4 col-form-label text-md-right">{{ __('Posisi') }}</label>
                            <div class="">
                                <textarea required name="posisi" class="form-control" style="width: 100%" rows="5">{{$testimoni->posisi}}</textarea>
                            </div>
                        </div>

                        <div class="">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>
                            <div class="">
                                <textarea required name="caption" class="form-control" style="width: 100%" rows="5">{{$testimoni->teks}}</textarea>
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
                                    {{ __('Simpan') }}
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
