<?php $__env->startSection('content'); ?>
    <h2>Update Data Customer</h2>
    <form action="/dataProdukAdm/updateProduk/<?php echo e($dataProduk->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($dataProduk->id); ?>">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="Name" class="form-control" 
            value="<?php echo e($dataProduk->Name); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">DESKRIPSI</label>
            <input type="text" name="Description" class="form-control"
            value="<?php echo e($dataProduk->Description); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">HARGA</label>
            <input type="number" name="Price" class="form-control"
            value="<?php echo e($dataProduk->Price); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">STOK</label>
            <input type="number" name="Stock" class="form-control"
            value="<?php echo e($dataProduk->Stock); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">KODE PRODUK</label>
            <input type="text" name="ProductCode" class="form-control"
            value="<?php echo e($dataProduk->ProductCode); ?>" required>
        </div>
        <a href="/dataProdukAdm" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutkaryawan.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/admin/updateProduk.blade.php ENDPATH**/ ?>