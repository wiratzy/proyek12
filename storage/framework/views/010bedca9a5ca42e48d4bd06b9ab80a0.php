<form action="<?php echo e(route('customer.update', $customer->CustomerID)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required value="<?php echo e($customer->nama); ?>">
    <br>
    <label for="nomor_hp">Nomor HP:</label>
    <input type="tel" id="nomor_hp" name="nomor_hp" required value="<?php echo e($customer->nomor_hp); ?>">
    <br>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required value="<?php echo e($customer->alamat); ?>">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required value="<?php echo e($customer->email); ?>">
    <br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Ubah</button>
</form>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/customer/edit.blade.php ENDPATH**/ ?>