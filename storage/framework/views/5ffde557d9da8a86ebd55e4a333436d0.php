
<h2>Show Product</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ProductID</th>
            <th scope="col">Name</th>
            <th scope="col">ProductCode</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>

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
                <td>
                    <a href="<?php echo e(route('products.edit', $product->ProductID)); ?>">Edit</a>
                    <form action="<?php echo e(route('products.destroy', $product->ProductID)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\test\resources\views/dashboard/index.blade.php ENDPATH**/ ?>