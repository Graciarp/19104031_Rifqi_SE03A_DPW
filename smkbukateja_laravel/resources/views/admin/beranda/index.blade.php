@extends('layouts.app')

@section('content')
<div class="container">
    <div class="well" id="berandaToggler" style="cursor: pointer; margin-bottom: 0px">
        <h3>Beranda</h3>
    </div>

    <div class="well" id="berandaSection">
        <table class="table">
            <tr>
                <td>
                     key
                </td>
                <td>
                    value
                </td>
                <td>

                </td>
            </tr>

            @foreach ($beranda as $b)
                <tr>
                    <td>
                        {{$b->key}}
                    </td>
                    <td>
                        @if ($b->key == 'banner_beranda')
                            <img src="{{url('img' . '/' . $b->value)}}" width="150px" alt="" srcset="">
                        @else
                            {!!($b->value)!!}
                        @endif
                    </td>
                    <td>
                        <a href="/beranda/editBeranda/{{$b->id}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <br>

    <div class="well" id="programKeahlianToggler" style="cursor: pointer; margin-bottom: 0px">
        <h3 class="pull-left">Program Keahlian</h3>

        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#addProgramKeahlian">
            Tambah
        </button>
    </div>

    <div class="well" id="programKeahlianSection">
        <table class="table">
            <tr>
                <td>
                    #
                </td>
                <td>
                    Judul
                </td>
                <td>
                    Gambar
                </td>
                <td>
                    Deskripsi
                </td>
                <td>

                </td>
            </tr>

            <tbody>
                @php
                    $no = 1
                @endphp
                @foreach ($programKeahlian as $item)
                    <tr>
                        <td>
                            {{$no++}}
                        </td>
                        <td>
                            {{$item->judul}}
                        </td>
                        <td>
                            <img src="{{url('img/program_keahlian') . '/' . $item->image}}" width="150px" alt="" sizes="" srcset="">
                        </td>
                        <td>
                            {{Str::limit($item->deskripsi, 80)}}..
                        </td>
                        <td>
                            <button onclick="editProgramKeahlian('{{$item->id}}')" class="btn btn-warning">Edit</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('admin.beranda.modal')

<script>
    $('#berandaToggler').click(function (e) { 
        e.preventDefault();
        $('#berandaSection').slideToggle();
    });

    $('#programKeahlianToggler').click(function (e) { 
        e.preventDefault();
        $('#programKeahlianSection').slideToggle();
    });

    function editProgramKeahlian(id) {
        $.ajax({
            url: "{{url('programKeahlian/json')}}/" + id,
            success: function (response) {
                var data = response.data
                var updateUrl = "{{url('programKeahlian/update')}}/" + id

                $('#editProgramKeahlian input#judul').val(data.judul)
                $('#editProgramKeahlian #deskripsi').val(data.deskripsi)
                $('#editProgramKeahlian form').attr('action', updateUrl)
                $('#editProgramKeahlian').modal('show')

                
            }
        });
    }
</script>
@endsection
