@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="pull-left">Testimoni</h3>
            <a href="{{ route('testimoni.create') }}" class="btn pull-right btn-sm btn-primary float-right">{{ __('Tambah') }}</a>
        </div>
        <br><br>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Foto
                        </td>
                        <td>
                            Nama
                        </td>
                        <td>
                            Posisi
                        </td>
                        <td>
                            Teks
                        </td>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($testimoni as $t)
                        <tr>
                            <td>
                                {{ $nomor++ }}
                            </td>
                            <td>
                                <img src="{{url('img' . '/' . $t->foto)}}" width="140px" alt="" srcset="">
                            </td>
                            <td>
                                <small>
                                    {{ $t->nama }}
                                </small>
                            </td>
                            <td>
                                <small>
                                    {{ $t->posisi }}
                                </small>
                            </td>
                            <td>
                                <small>
                                    {{ $t->teks }}
                                </small>
                            </td>
                            <td>
                                <a href="{{ route('testimoni.edit', $t->id) }}" class="btn btn-sm btn-warning">
                                    {{ __('Edit') }}
                                </a>
                                <a href="/testimoni/hapus/{{$t->id}}" class="btn btn-sm btn-danger">
                                    {{ __('Hapus') }}
                                </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <td>
                            No
                        </td>
                        <td>
                            Foto
                        </td>
                        <td>
                            Nama
                        </td>
                        <td>
                            Posisi
                        </td>
                        <td>
                            Teks
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
