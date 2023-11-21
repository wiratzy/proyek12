
<table class="table">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>alamat</th>
            <th>email</th>
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
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/customer/index.blade.php ENDPATH**/ ?>