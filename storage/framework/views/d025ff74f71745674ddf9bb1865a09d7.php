<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('adminlte')); ?>/dist/img/cat.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/kategori.css" />

    <!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('adminlte')); ?>/plugins/fontawesome-free/css/all.min.css">

</head>
<main class="pt-0">
            <?php echo $__env->yieldContent('content'); ?>
</main>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?php echo e(asset('js')); ?>/kategori.js"></script><?php /**PATH C:\xampp\htdocs\proyek12\resources\views/layouts/kategori.blade.php ENDPATH**/ ?>