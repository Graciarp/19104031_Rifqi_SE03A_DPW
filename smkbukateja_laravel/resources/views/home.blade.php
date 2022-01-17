@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('warning'))
                <div class="alert alert-success">
                    {{ session('warning') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            {{ __('Berita') }}
                        </div>
                        <div class="col">
                            <a href="{{ route('informasi.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Tambah') }}</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
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
                                        Dibuat pada
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            <img src="{{url('img/artikel' . '/' . $d->gambar)}}" width="140px" alt="" srcset="">
                                        </td>
                                        <td>
                                            <a target="_blank" href="{{ route('informasi.show', $d->slug) }}">
                                                {{ $d->judul }}
                                            </a>
                                        </td>
                                        <td>
                                            {{ $d->created_at }}
                                        </td>
                                        <td>
                                            <a href="{{ route('informasi.edit', $d->id) }}" class="btn btn-sm btn-warning">
                                                {{ __('Edit') }}
                                            </a>
                                            <form action="{{ route('informasi.destroy', $d->id) }}" method="post" class="d-inline">
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
                                        Dibuat pada
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Prestasi
                        </div>
                        <div class="col">
                            <a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Tambah') }}</a>
                        </div>
                    </div>
                </div>
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
    </div>
</div>
@endsection
