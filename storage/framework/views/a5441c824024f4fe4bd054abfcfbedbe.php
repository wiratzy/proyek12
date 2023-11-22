<?php $__env->startSection('content'); ?>
<body class="antialiased">
    <div class="container">
        <h1 class="text-center">Display Product</h1>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/products" method="GET">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Search" name="search"
                        value="<?php echo e(request('search')); ?>">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <!-- Mulai carousel di sini -->
        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($key === 0 ? 'active' : ''); ?>">
                        <img src="<?php echo e(asset('storage/'. $product->ImageURL)); ?>" class="d-block w-100" alt="<?php echo e($product->Name); ?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo e($product->Name); ?></h5>
                            <p><?php echo e($product->Description); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
        <!-- Selesai carousel -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <img src="<?php echo e(asset('storage/'. $product->ImageURL)); ?>"  class="card-img-top">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3><?php echo e($product->Name); ?></h3>
                            <p class="card-text"><?php echo e($product->Description); ?></p>
                            <h3><?php echo e($product->Price); ?></h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-body-secondary">Stock: <?php echo e($product->Stock); ?> <a href="/login" class="text-decoration-none">❤️</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <?php echo e($products->links()); ?>

        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyek12\resources\views/frontend/index.blade.php ENDPATH**/ ?>