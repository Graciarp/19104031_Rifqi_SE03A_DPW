

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <?php echo e(__('Dashboard')); ?>

                        </div>
                        <div class="col text-right">
                            <button onclick="$('#addUser').modal('show')" class="btn btn-success btn-sm">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
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
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($user->id); ?></th>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->nowa); ?></td>
                                <td><?php echo e($user->address); ?></td>
                                <td>
                                    <button onclick="editUser('<?php echo e($user->id); ?>')" class="btn btn-primary">Edit</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
          <form action="<?php echo e(route('manajemenAdmin.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
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
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Ripki Alfinnur\TUGAS PRIBADI\SEMESTER 5\Gracia_SE03A_DPW\smkbukateja_laravel\resources\views/manajemenAdmin.blade.php ENDPATH**/ ?>