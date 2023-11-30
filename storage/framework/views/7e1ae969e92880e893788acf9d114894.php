

<?php $__env->startSection('title', __('Not Found')); ?>
<?php $__env->startSection('code', '403'); ?>
<?php $__env->startSection('message', __('Not Found')); ?>


<script>
    let urlTerakhir;
    if ("<?php echo e(Auth::user()->role); ?>" == "customer") {
        urlTerakhir = "/products"
    } else {
        urlTerakhir = "/dashboardKaryawan"
    }
    setTimeout(() => {
        window.location.href = urlTerakhir
    }, 5000)
</script>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/errors/403.blade.php ENDPATH**/ ?>