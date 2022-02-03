<!-- Modal -->
<div id="addProgramKeahlian" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Program Keahlian</h4>
        </div>
        <div class="modal-body">
          <form action="{{url('/programKeahlian/save')}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group">
                <label for="judul">Name:</label>
                <input type="text" name="judul" class="form-control" required id="judul">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required></textarea>
              </div>

              <div class="form-group">
                <label for="gambar">Unggah Gambar :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" required id="gambar">
              </div>

              <div class="form-group">
                <label for="struktur_organisasi_img">Unggah Gambar Struktur Organisasi:</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="struktur_organisasi_img" required id="struktur_organisasi_img">
              </div>

              <div class="form-group">
                <label for="yang_dipelajari_img">Unggah Gambar Materi:</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="yang_dipelajari_img" required id="yang_dipelajari_img">
              </div>

              <br>

              <p>Contoh Gambar Materi : </p>
              <img src="data:image/png;base64,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" width="100%" alt="">

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button onclick="$('#addProgramKeahlian form').submit()" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>

  <div id="editProgramKeahlian" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Program Keahlian</h4>
        </div>
        <div class="modal-body">
          <form action="#" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group">
                <label for="judul">Name:</label>
                <input type="text" name="judul" class="form-control" required id="judul">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required></textarea>
              </div>

              <div class="form-group">
                <label for="gambar">Unggah Gambar * :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" id="gambar">
              </div>

              <div class="form-group">
                <label for="struktur_organisasi_img">Unggah Gambar Struktur Organisasi * :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="struktur_organisasi_img" id="struktur_organisasi_img">
              </div>

              <div class="form-group">
                <label for="yang_dipelajari_img">Unggah Gambar Materi *:</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="yang_dipelajari_img" id="yang_dipelajari_img">
              </div>

              <p>
                * unggah jika hanya ingin mengganti
              </p>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button onclick="$('#editProgramKeahlian form').submit()" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>

  <!-- Modal -->
<div id="programKeahlianGaleriEdit" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> </h4>
      </div>
      <div class="modal-body">

        <p>Gambar yang ada (klik untuk menghapusnya) :</p>

        <div id="loopGaleriProgramKeahlian">
          {{-- <a onclick="if(!confirm('yakin ingin menghapus?')){return false}" href="/programKeahlian/galery_hapus/">
            <img src="" width="150px">
          </a> --}}

        </div>

        <br>

        <form action="" enctype="multipart/form-data" method="post">
          @csrf
          <div class="form-group">
            <label for="gambar">Unggah Gambar Galeri:</label>
            <input type="file" required name="gambar" id="gambar" accept=".jpg, .jpeg, .png">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button onclick="$('#programKeahlianGaleriEdit form').submit()" type="submit" class="btn btn-success">Simpan</button>
      </div>
    </div>

  </div>
</div>

  {{-- Ekstrakurikuler --}}

  <div id="addEkstrakurikuler" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Ekstrakurikuler</h4>
        </div>
        <div class="modal-body">
          <form action="{{url('/ekstrakurikuler/save')}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group">
                <label for="judul">Name:</label>
                <input type="text" name="judul" class="form-control" required id="judul">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required></textarea>
              </div>

              <div class="form-group">
                <label for="sejarah">Sejarah Singkat:</label>
                <textarea class="form-control" rows="7" id="sejarah" name="sejarah" required></textarea>
              </div>

              <div class="form-group">
                <label for="gambar">Unggah Gambar :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" required id="gambar">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button onclick="$('#addEkstrakurikuler form').submit()" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>

  <div id="editEkstrakurikuler" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Ekstrakurikuler</h4>
        </div>
        <div class="modal-body">
          <form action="{{url('/ekstrakurikuler/save')}}" enctype="multipart/form-data" method="post">
              @csrf
              <div class="form-group">
                <label for="judul">Name:</label>
                <input type="text" name="judul" class="form-control" required id="judul">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required></textarea>
              </div>

              <div class="form-group">
                <label for="sejarah">Sejarah Singkat:</label>
                <textarea class="form-control" rows="7" id="sejarah" name="sejarah" required></textarea>
              </div>

              <div class="form-group">
                <label for="gambar">Unggah Gambar :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" id="gambar">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button onclick="$('#editEkstrakurikuler form').submit()" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>