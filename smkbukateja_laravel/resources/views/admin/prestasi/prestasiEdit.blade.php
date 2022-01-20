@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Data Prestasi
                    </h4>    
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('prestasi.update', $prestasi->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul') }}</label>

                            <div class="col-md-6">
                                <input id="judul" style="width: 100%" value="{{$prestasi->judul}}" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
                            </div>
                        </div>

                        <div class="">
                            <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('Isi') }}</label>
                            <div class="">     
                                <textarea required name="isi" class="form-control" style="width: 100%" rows="5">{{$prestasi->isi}}</textarea>
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
