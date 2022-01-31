<!-- Modal -->
<div id="addData" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kegiatan</h4>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="{{url('ekstrakurikuler/kegiatan' . '/' . $id)}}" method="post">
              @csrf

              <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="5" id="deskripsi"></textarea>
              </div>
              
              <div class="form-group">
                <label for="gambar">Unggah Gambar :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" required id="gambar">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button onclick="$('#addData form').submit()" class="btn btn-primary">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>

  <div id="editData" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kegiatan</h4>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="" method="post">
              @csrf
                @method('put')

              <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="5" id="deskripsi"></textarea>
              </div>
              
              <div class="form-group">
                <label for="gambar">Unggah Gambar :</label>
                <input accept=".jpg, .jpeg, .png" type="file" name="gambar" id="gambar">
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button onclick="$('#editData form').submit()" class="btn btn-primary">Simpan</button>
        </div>
      </div>
  
    </div>
  </div>