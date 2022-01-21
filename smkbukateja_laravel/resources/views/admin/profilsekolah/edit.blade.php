@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Data Profil Sekolah
                    </h4>
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="/profilsekolah/update/{{$profilsekolah->id}}" enctype="multipart/form-data">
                        @csrf

                        @if($profilsekolah->key != 'struktur_organisasi')

                        <div class="">
                            <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('value') }}</label>
                            <div class="">
                                <textarea required name="value" class="form-control" style="width: 100%" rows="5">{{$profilsekolah->value}}</textarea>
                            </div>
                        </div>
                        @else

                        <p>
                            Gambar saat ini :
                        </p>
                        <img src="{{url('img' . '/' . $profilsekolah->value)}}" width="100%" alt="" srcset="">

                        <br><br>

                        <div class="">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Unggah gambar baru untuk mengubah gambar :') }}</label>
                            <div class="col-md-6">
                                <input type="file" name="value" required accept=".jpg, .png" id="">
                            </div>
                        </div>
                        @endif

                        <br>

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
