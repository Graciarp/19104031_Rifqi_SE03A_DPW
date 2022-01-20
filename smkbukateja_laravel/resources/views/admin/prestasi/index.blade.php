@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="pull-left">Prestasi</h3>
            <a href="{{ route('prestasi.create') }}" class="btn pull-right btn-sm btn-primary float-right">{{ __('Tambah') }}</a>
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
                            Gambar
                        </td>
                        <td>
                            Judul
                        </td>
                        <th>
                            Caption
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($prestasi as $d)
                        <tr>
                            <td>
                                {{ $nomor++ }}
                            </td>
                            <td>
                                <img src="{{url('img/prestasi' . '/' . $d->gambar)}}" width="140px" alt="" srcset="">
                            </td>
                            <td>
                                <a href="{{ route('informasi.show', $d->id) }}">
                                    {{ $d->judul }}
                                </a>
                            </td>
                            <td>
                                <small>
                                    {{ $d->isi }}
                                </small>
                            </td>
                            <td>
                                <a href="{{ route('prestasi.edit', $d->id) }}" class="btn btn-sm btn-warning">
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('prestasi.destroy', $d->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button onclick="if(!confirm('Yakin ingin hapus?')){return false}" class="btn btn-sm btn-danger" type="submit">
                                        {{ __('Hapus') }}
                                    </button>
                                </form>
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
                            Gambar
                        </td>
                        <td>
                            Judul
                        </td>
                        <th>
                            Caption
                        </th>
                        <th>

                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection