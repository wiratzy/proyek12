<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>

                <th>NO</th>
                <th>NAMA</th>
                <th>Produk Kode</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>GAMBAR</th>

                <th><button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> <i class="fa fa-user-plus fa-lg"></i>
                        Produk</button></th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $dataProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($no); ?></td>
                    <td><?php echo e($item->Name); ?></td>
                    <td><?php echo e($item->ProductCode); ?></td>
                    <td><?php echo e($item->Description); ?></td>
                    <td><?php echo e($item->Price); ?></td>
                    <td><?php echo e($item->Stock); ?></td>
                    <td class="text-center"><img width="50" height="50" src="<?php echo e(asset('/storage/images/' . $item->ImageURL)); ?>" class="img-responsive"></td>
                    <td>
                        <a href="/dataProduk/editProduk/<?php echo e($item->ProductID); ?>" class="btn btn-sm btn-secondary"><i
                                class="fa fa-wrench"></i> Edit</a>
                        <a href="/dataProduk/destroyProduk/<?php echo e($item->ProductID); ?>" class="btn btn-sm btn-danger">
                            Hapus</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="Name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="deskripsi">Deskripsi:</label>
                        <textarea name="Description" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="Price" class="form-label">Price:</label>
                        <input type="number" name="Price" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ProductCode" class="form-label">Produk kode:</label>
                        <input type="text" name="ProductCode" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Stock" class="form-label">Stock:</label>
                        <input type="number" name="Stock" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ImageURL" class="form-label">Image:</label>
                        <input type="file" name="ImageURL" class="form-control" required>
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

<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyek12\resources\views/karyawan/produk.blade.php ENDPATH**/ ?>