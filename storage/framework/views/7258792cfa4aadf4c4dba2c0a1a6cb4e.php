<table class="table">
    <h2 class="text-center mt-4">Pengelolaan Data Produk</h2>
    <thead>
        <tr>
            <th scope="col">ProductID</th>
            <th scope="col">Name</th>
            <th scope="col">ProductCode</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            <th scope="col">                    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">Tambah Produk</a>
            </th>

        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($product->ProductID); ?></th>
                <td><?php echo e($product->Name); ?></td>
                <td><?php echo e($product->ProductCode); ?></td>
                <td><?php echo e($product->Description); ?></td>
                <td><?php echo e($product->Price); ?></td>
                <td><?php echo e($product->Stock); ?></td>
                <td><?php echo e($product->ImageURL); ?></td>
                <td>
                    <a href="<?php echo e(route('products.edit', $product->ProductID)); ?> " class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="<?php echo e(route('products.destroy', $product->ProductID)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <table class="table">
    <h2 class="text-center mt-4 mb-5">Pengelolaan Data Customer</h2>
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>alamat</th>
            <th>email</th>
            <th>Action</th>
            <th> <a href="<?php echo e(route('customer.create')); ?>" class="btn btn-success">Tambah Customer</a></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer->CustomerID); ?></td>
            <td><?php echo e($customer->nama); ?></td>
            <td><?php echo e($customer->nomor_hp); ?></td>
            <td><?php echo e($customer->alamat); ?></td>
            <td><?php echo e($customer->email); ?></td>
            <td>
                <a href="<?php echo e(route('customer.edit', $customer->CustomerID)); ?>" class="btn btn-warning">Edit</a>
            </td>
           
            <td>
                <form action="<?php echo e(route('customer.destroy', $customer->CustomerID)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</table>

<div class="" >
    <a class="" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</div>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/dashboard/dashboardKaryawan.blade.php ENDPATH**/ ?>