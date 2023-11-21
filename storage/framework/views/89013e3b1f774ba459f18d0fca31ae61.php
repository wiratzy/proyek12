<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<nav>
    <ul>
        <li>
            <a href="/login">Login</a>
        </li>
    </ul>
</nav>

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

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col">
                        <img src="https:source.unsplash.com/420x300?product" alt="">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3><?php echo e($product->Name); ?></h3>
                                <p class="card-text"><?php echo e($product->Description); ?></p>
                                <h3><?php echo e($product->Price); ?></h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-body-secondary">Stock: <?php echo e($product->Stock); ?></small>
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
</body>

</html>
<?php /**PATH C:\xampp\htdocs\proyek12\resources\views/home.blade.php ENDPATH**/ ?>