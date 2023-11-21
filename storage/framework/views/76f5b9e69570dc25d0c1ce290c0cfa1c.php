<h1>selamat datang karyawan <?php echo e(auth()->user()->name); ?></h1>
<div class="" >
    <a class="" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</div><?php /**PATH C:\Users\wiran\Documents\test\resources\views/dashboard/karyawan.blade.php ENDPATH**/ ?>