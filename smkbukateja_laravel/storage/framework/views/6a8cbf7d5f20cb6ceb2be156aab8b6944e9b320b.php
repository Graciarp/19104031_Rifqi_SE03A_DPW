

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('warning')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('warning')); ?>

                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <?php echo e(__('Artikel')); ?>

                        </div>
                        <div class="col">
                            <a href="<?php echo e(route('informasi.create')); ?>" class="btn btn-sm btn-primary float-right"><?php echo e(__('Tambah')); ?></a>
                        </div>
                    </div>
                </div>

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
                                <?php
                                    $no = 1;
                                ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($no++); ?>

                                        </td>
                                        <td>
                                            <img src="<?php echo e(url('img/artikel' . '/' . $d->gambar)); ?>" width="140px" alt="" srcset="">
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?php echo e(route('informasi.show', $d->slug)); ?>">
                                                <?php echo e($d->judul); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <?php echo e($d->created_at); ?>

                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('informasi.edit', $d->id)); ?>" class="btn btn-sm btn-warning">
                                                <?php echo e(__('Edit')); ?>

                                            </a>
                                            <form action="<?php echo e(route('informasi.destroy', $d->id)); ?>" method="post" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button onclick="if(!confirm('Yakin ingin hapus?')){return false}" class="btn btn-sm btn-danger" type="submit">
                                                    <?php echo e(__('Hapus')); ?>

                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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

            <br>

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Prestasi
                        </div>
                        <div class="col">
                            <a href="<?php echo e(route('prestasi.create')); ?>" class="btn btn-sm btn-primary float-right"><?php echo e(__('Tambah')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                                    Caption
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $nomor = 1;
                            ?>
                            <?php $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($nomor++); ?>

                                    </td>
                                    <td>
                                        <img src="<?php echo e(url('img/prestasi' . '/' . $d->gambar)); ?>" width="140px" alt="" srcset="">
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('informasi.show', $d->id)); ?>">
                                            <?php echo e($d->judul); ?>

                                        </a>
                                    </td>
                                    <td>
                                        <small>
                                            <?php echo e($d->isi); ?>

                                        </small>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('prestasi.edit', $d->id)); ?>" class="btn btn-sm btn-warning">
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                        <form action="<?php echo e(route('prestasi.destroy', $d->id)); ?>" method="post" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button onclick="if(!confirm('Yakin ingin hapus?')){return false}" class="btn btn-sm btn-danger" type="submit">
                                                <?php echo e(__('Hapus')); ?>

                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
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
                                    Caption
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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Ripki Alfinnur\TUGAS PRIBADI\SEMESTER 5\Gracia_SE03A_DPW\smkbukateja_laravel\resources\views/home.blade.php ENDPATH**/ ?>