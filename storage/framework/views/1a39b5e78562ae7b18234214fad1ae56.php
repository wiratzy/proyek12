<?php $__env->startSection('content'); ?>
    <h2>Penambahan Customer</h2>
    <form action="/dataCustomerAdm/storeCust" method="POST" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="file" name="image">
        </div>
        <a href="/dataCustomerAdm" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/admin/createcust.blade.php ENDPATH**/ ?>