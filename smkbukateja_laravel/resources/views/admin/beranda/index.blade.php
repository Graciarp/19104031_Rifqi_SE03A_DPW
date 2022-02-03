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
                    Gambar Materi
                </td>
                <td>
                    Struktur Organisasi
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
                            <a href="{{url('img/program_keahlian') . '/' . $item->image}}" target="_blank">
                                <img src="{{url('img/program_keahlian') . '/' . $item->image}}" width="150px" alt="" sizes="" srcset="">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('img/program_keahlian/materi') . '/' . $item->yang_dipelajari_img}}" target="_blank">
                                <img src="{{url('img/program_keahlian/materi') . '/' . $item->yang_dipelajari_img}}" width="150px" alt="" sizes="" srcset="">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('img/program_keahlian/struktur_organisasi_img') . '/' . $item->struktur_organisasi_img}}" target="_blank">
                                <img src="{{url('img/program_keahlian/struktur_organisasi_img') . '/' . $item->struktur_organisasi_img}}" width="150px" alt="" sizes="" srcset="">
                            </a>
                        </td>
                        <td>
                            {{Str::limit($item->deskripsi, 80)}}..
                        </td>
                        <td>
                            <button style="width: 100%; margin-bottom: 5px" onclick="editGaleriProgramKeahlian('{{$item->id}}', '{{$item->judul}}')" type="button" class="btn btn-light">
                                Edit Foto Galeri
                            </button>
                            <button style="width: 100%; margin-bottom: 5px" onclick="editProgramKeahlian('{{$item->id}}')" class="btn btn-warning">Edit</button>
                            <a target="_blank" href="{{url('program_keahlian' . '/' . $item->id)}}">
                                <button style="width: 100%" type="button" class="btn btn-info">
                                    Lihat
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br>

    <div class="well" id="ekstrakurikulerToggler" style="cursor: pointer; margin-bottom: 0px">
        <h3 class="pull-left">Ekstrakurikuler</h3>

        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#addEkstrakurikuler">
            Tambah
        </button>
    </div>

    <div class="well" id="ekstrakurikulerSection">
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
                    $nomor = 1
                @endphp
                @foreach ($ekstrakurikuler as $item)
                    <tr>
                        <td>
                            {{$nomor++}}
                        </td>
                        <td>
                            {{$item->judul}}
                        </td>
                        <td>
                            <img src="{{url('img/ekstrakurikuler') . '/' . $item->image}}" width="150px" alt="" sizes="" srcset="">
                        </td>
                        <td>
                            {{Str::limit($item->deskripsi, 80)}}..
                        </td>
                        <td>
                            <button onclick="editEkstra('{{$item->id}}')" class="btn btn-warning">Edit</button>
                            <a href="{{url('ekstrakurikuler/kegiatan' . '/' . $item->id)}}" class="btn btn-info" type="button">
                                Edit Kegiatan Ekstra
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@include('admin.beranda.modal')

<script>
    $('#programKeahlianSection, #ekstrakurikulerSection').hide();

    $('#berandaToggler').click(function (e) { 
        e.preventDefault();
        $('#berandaSection').slideToggle();
    });

    $('#programKeahlianToggler').click(function (e) { 
        e.preventDefault();
        $('#programKeahlianSection').slideToggle();
    });

    $('#ekstrakurikulerToggler').click(function (e) { 
        e.preventDefault();
        $('#ekstrakurikulerSection').slideToggle();
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

    function editEkstra(id) {
        $.ajax({
            url: "{{url('ekstrakurikuler/json')}}/" + id,
            success: function (response) {
                var data = response.data

                $('#editEkstrakurikuler input#judul').val(data.judul)
                $('#editEkstrakurikuler #deskripsi').val(data.deskripsi)
                $('#editEkstrakurikuler #sejarah').val(data.sejarah)
                $('#editEkstrakurikuler form').attr('action', "{{url('ekstrakurikuler/update')}}/" + id)

                $("#editEkstrakurikuler").modal('show')
            }
        });
    }

    function editGaleriProgramKeahlian(id, judul) {
        $('#programKeahlianGaleriEdit h4.modal-title').text("Galeri Program Kerja " + judul);
        $('#programKeahlianGaleriEdit form').attr('action', "{{url('programKeahlian/galery_save')}}/" + id);

        $.ajax({
            url: "{{url('programKeahlian/galery_json')}}/" + id,
            success: function (response) {
                var data = response.data

                $('#programKeahlianGaleriEdit #loopGaleriProgramKeahlian').empty()

                if (data.length > 0) {
                    
                    for (let index = 0; index < data.length; index++) {
                        var htmlLooping = `
                            <a onclick="if(!confirm('yakin ingin menghapus?')){return false}" href="/programKeahlian/galery_hapus/`+id+`/index/`+index+`">
                              <img src="`+ data[index] +`" width="150px">
                            </a>
                        `;
                        
                        $('#programKeahlianGaleriEdit #loopGaleriProgramKeahlian').append(htmlLooping);
                    }

                }

                $("#programKeahlianGaleriEdit").modal('show')
            }
        });
    }
</script>
@endsection
