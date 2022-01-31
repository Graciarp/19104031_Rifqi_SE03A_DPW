@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div>
                <h4 class="pull-left">
                    Edit Kegiatan 
                </h4>
    
                <button data-toggle="modal" data-target="#addData" class="btn btn-primary pull-right" type="button">
                    Tambah
                </button>
            </div>

            <br><br>

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
                            Deskripsi
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $nomor = 1;
                    @endphp
                    @foreach ($kegiatan as $k)
                        <tr>
                            <td>
                                {{ $nomor++ }}
                            </td>
                            <td>
                                <img src="{{url('img/kegiatanekstra' . '/' . $k->gambar)}}" width="150px" alt="" srcset="">
                            </td>
                            <td>
                                {{ $k->judul }}
                            </td>
                            <td>
                                {{ Str::limit($k->deskripsi, 100) }}...
                            </td>
                            <td>
                                <button onclick="editekstra('{{$k->id}}')" class="btn btn-warning" type="button">
                                    Edit
                                </button>
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
                            Deskripsi
                        </th>
                        <th>

                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <br>

    <a href="{{url('/beranda/index')}}" class="btn btn-light" type="button">Kembali</a>
</div>

@include('admin.kegiatanekstra.modal', ['id' => $data->id])

<script>
    function editekstra(id) {
        $.ajax({
            url: "{{url('ekstrakurikuler/kegiatan/json')}}/" + id,
            success: function (response) {
                var data = response.data;

                $("#editData #judul").val(data.judul)
                $("#editData #deskripsi").val(data.deskripsi)

                var urlEdit = "{{url('ekstrakurikuler/kegiatan')}}/" + id;
                $("#editData form").attr('action', urlEdit);

                $("#editData").modal('show')
            }
        });
    }
</script>
@endsection
