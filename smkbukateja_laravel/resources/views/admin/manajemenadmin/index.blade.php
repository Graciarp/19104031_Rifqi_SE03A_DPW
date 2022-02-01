@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-header">
                  <h4 class="pull-left">
                    Dashboard
                  </h4>
                  
                  <button onclick="$('#addUser').modal('show')" class="btn pull-right btn-success btn-sm">
                    Tambah
                  </button>
                </div>

                <br><br>

                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->nowa }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <button onclick="editUser('{{$user->id}}')" class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addUser">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('manajemenAdmin.store')}}" method="post">
            @csrf
              <div class="form-group">
                <label for="name">Name:</label>
                <input required type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input required type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="nowa">No Wa:</label>
                <input required type="text" class="form-control" name="nowa" id="nowa">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
          </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" onclick="$('#addUser form').submit()" class="btn btn-success">Simpan</button>
        </div>
  
      </div>
    </div>
  </div>

  <div class="modal fade" id="editUser">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="" method="post">
            @csrf
            @method('PUT')
              <div class="form-group">
                <label for="name">Name:</label>
                <input required type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input required type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="nowa">No Wa:</label>
                <input required type="text" class="form-control" name="nowa" id="nowa">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
          </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" onclick="$('#editUser form').submit()" class="btn btn-success">Simpan</button>
        </div>
  
      </div>
    </div>
  </div>

  <script>
      function editUser(id) {
        $.ajax({
            url: "/manajemenAdmin/infoUser/" + id,
            type: "GET",
            data: {
                id: id
            },
            success: function(response) {
                $('#editUser form').attr('action', "/manajemenAdmin/"+id);
                $('#editUser form input[name="name"]').val(response.name);
                $('#editUser form input[name="email"]').val(response.email);
                $('#editUser form input[name="nowa"]').val(response.nowa);
                $('#editUser form input[name="password"]').val(response.password);
                $('#editUser').modal('show');
            }
        });
      }
  </script>
@endsection
