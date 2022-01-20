@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="pull-left">Guru & Karyawan</h3>
    <a href="#" data-toggle="modal" data-target="#addDataModal" class="btn pull-right btn-sm btn-primary float-right">{{ __('Tambah') }}</a>

    <br><br>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        Gambar
                    </td>
                    <td>
                        Nama
                    </td>
                    <td>
                        Jabatan
                    </td>
                    <td>

                    </td>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($gurudankaryawan as $item)
                    <tr>
                        <td>
                            {{$no++}}
                        </td>
                        <td>
                            <img src="{{url('img/guru_karyawan' . '/' . $item->foto)}}" width="100px" alt="" srcset="">
                        </td>
                        <td>
                            {{$item->nama}}
                        </td>
                        <td>
                            {{ ucwords(str_replace('_', " ", $item->jabatan)) }}
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="addDataModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <form action="/gurukaryawan/save" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" required name="nama">
              </div>

              <div class="form-group">
                <label for="jabatan">Pilih Jabatan:</label>
                <select required class="form-control" name="jabatan" id="jabatan">
                  <option selected disabled>Pilih</option>
                  <option value="kepala_sekolah">Kepala sekolah</option>
                  <option value="wakil_kepala_sekolah">Wakil Kepala sekolah</option>
                  <option value="guru">Guru</option>
                  <option value="kepala_tata_usaha">Kepala TU</option>
                  <option value="karyawan">Karyawan</option>
                </select>
              </div>

              <div id="detailGuruBox" class="form-group">
                <label for="detailGuru">Mengajar mapel apa:</label>
                <input type="text" class="form-control" name="detailGuru" id="detailGuru">
              </div>

              <div id="sambutanBox" class="form-group">
                <label for="sambutan">Sambutan:</label>
                <textarea class="form-control" name="sambutan" rows="5" id="sambutan"></textarea>
              </div>

              <div class="form-group">
                <label for="foto">Pilih Foto</label>
                <input required type="file" name="foto" accept=".jpg, .png" id="foto">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button onclick="$('#addDataModal form').submit()" type="button" class="btn btn-default" >Simpan</button>
        </div>
      </div>
  
    </div>
  </div>

  <script>
      $("#sambutanBox, #detailGuruBox").hide();

      $('#addDataModal #jabatan').on('change', function () {
          var jabatan = $('#addDataModal #jabatan').val();
          
          switch (jabatan) {
              case 'kepala_sekolah':
                  $('#sambutanBox').show();
                  $('#detailGuruBox').hide();
                  break;

              case 'guru':
                  $('#sambutanBox').hide();
                  $('#detailGuruBox').show();
                  break;
          
              default:
                  $("#sambutanBox, #detailGuruBox").hide();
                  break;
          }
      });
  </script>
@endsection
