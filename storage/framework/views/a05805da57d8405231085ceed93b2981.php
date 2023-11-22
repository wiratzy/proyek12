<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th><a href="/dataKaryawan/createKaryawan" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-user-plus "></i>
                        Karyawan</a></th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $dataKaryawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($item->name); ?></td>
                    <td><?php echo e($item->email); ?></td>
                    <!-- <td class="text-center"><img width="50" height="50" src="<?php echo e(asset($item->image_path)); ?>" class="img-responsive"></td> -->
                    <td>
                        <a href="dataKaryawan/editKaryawan/<?php echo e($item->id); ?>" class="btn btn-sm btn-secondary"><i
                                class="fa fa-wrench"></i> Edit</a>
                        <a href="/dataKaryawan/destroyKaryawan<?php echo e($item->id); ?>" class="btn btn-sm btn-danger"><i
                                class="fa fa-trash"></i> Hapus</a>
                        <a href="/dataKaryawan/resetPassword/<?php echo e($item->id); ?>" class="btn btn-sm btn-warning"><i
                                class="fa fa-recycle"></i> Reset Password</a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Customer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="/dataKaryawan/storeKaryawan" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Passowrd:</label>
                        <input type="password" name="password" class="form-control" required></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/admin/karyawan.blade.php ENDPATH**/ ?>