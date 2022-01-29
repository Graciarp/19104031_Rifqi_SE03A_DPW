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
                <input accept=".jpg, .jpeg" type="file" name="gambar" required id="gambar">
              </div>
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
                <label for="gambar">Unggah Gambar (unggah jika hanya ingin mengganti) :</label>
                <input accept=".jpg, .jpeg" type="file" name="gambar" id="gambar">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button onclick="$('#editProgramKeahlian form').submit()" type="submit" class="btn btn-success">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>