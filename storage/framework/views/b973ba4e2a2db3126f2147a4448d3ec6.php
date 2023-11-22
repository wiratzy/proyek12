
<?php $__env->startSection('content'); ?>
    <h2>Update Data Customer</h2>
    <form action="/dataCustomerAdm/updateCust/<?php echo e($dataCust->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($dataCust->id); ?>">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" 
            value="<?php echo e($dataCust->name); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-control"
            value="<?php echo e($dataCust->email); ?>" required>
        </div>
        <a href="/dataCustomerAdm" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/admin/update.blade.php ENDPATH**/ ?>