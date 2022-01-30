@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Data Beranda : {{ $beranda->key }}
                    </h4>
                </div>

                <br>

                <div class="card-body">
                    <form method="POST" action="/beranda/update/{{$beranda->id}}" enctype="multipart/form-data">
                        @csrf

                        @if ($beranda->key == 'banner_beranda')
                            <p>
                                Gambar saat ini (tekan gambar untuk menghapusnya) :
                            </p>

                            @php
                                $gambar = json_decode($beranda->value, true);
                            @endphp

                            <div style="width: 100%; overflow-x: auto">
                                @php
                                    $urutan = 1
                                @endphp
                                @foreach ($gambar as $g)
                                    <a href="{{url('beranda/hapus_gb_beranda' . '/' . $urutan)}}" onclick="if(!confirm('Yakin ingin menghapus gambar ke {{$urutan}}')){return false}">
                                        <img src="{{url('img' . '/' . $g)}}" width="300px" alt="" srcset="">
                                    </a>
                            
                                    @php
                                        $urutan++
                                    @endphp
                                @endforeach
                            </div>

                            <br><br>

                            <p>
                                Unggah gambar baru untuk mengubah gambar :
                            </p>
                            <input type="file" name="value" accept=".jpg, .png, .jpeg" required id="">

                            <br>
                        @else
                            <div class="">
                                <label for="isi" class="col-md-4 col-form-label text-md-right">{{ __('value') }}</label>
                                <div class="">
                                    <textarea required name="value" class="form-control" style="width: 100%" rows="5">{{$beranda->value}}</textarea>
                                </div>
                            </div>
                        @endif

                        <br>

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
