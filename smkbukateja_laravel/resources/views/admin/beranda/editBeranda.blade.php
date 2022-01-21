@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Data Beranda
                    </h4>
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="/beranda/update/{{$beranda->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('value') }}</label>
                            <div class="">
                                <textarea required name="value" class="form-control" style="width: 100%" rows="5">{{$beranda->value}}</textarea>
                            </div>
                        </div>

                        {{-- <div class="">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
                            <div class="col-md-6">
                                <input type="file" name="gambar" accept=".jpg, .png" id="">
                                <br>
                                <small>
                                    Upload gambar baru jika ingin mengganti gambar lama, kosongi jika tidak ingin mengganti gambar lama.
                                </small>
                            </div>
                        </div> --}}

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
