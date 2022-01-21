@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="pull-left">{{ __('Berita') }}</h3>

                <a href="{{ route('informasi.create') }}" class="btn pull-right btn-sm btn-primary float-right">{{ __('Tambah') }}</a>
            </div>

            <br><br>

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
    </div>
@endsection
