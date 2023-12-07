<!-- Main Sidebar Container -->
<!-- <a class="nav-link" data-widget="control-sidebar" href="#">Toggle Control Sidebar</a> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
<button class="navbar-light bg-light navbar-toggler" type="button" data-bs-toggle="collapse" data-widget="pushmenu">
<span class="navbar-toggler-icon"></span>
</button>
<!-- <button class="btn btn-primary" data-widget="pushmenu" data-auto-collapse-size="768">Toggle Sidebar</button> -->
<aside class="main-sidebar control-sidebar-dark elevation-4">

<!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
<img src="<?php echo e(asset('adminlte')); ?>/dist/img/AdminLTELogo.png"
alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:
.8">
<span class="brand-text font-weight-light">CRUD LARAVEL</span>
</a> -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('adminlte')); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="/profil" class="d-block text-decoration-none"><?php echo e(auth()->user()->name); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
>>>>>>> ba95dd4ddeec193f41762d9b7a401d04dc62b7d7
with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboardKaryawan" class="nav-link
<?php echo e($slug == 'dashboardKaryawan' ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link
<?php echo e($slug == 'profil' ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataCustomer" class="nav-link
<?php echo e($slug == 'customer' ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Data Customer
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dataProduk" class="nav-link
<?php echo e($slug == 'produk' ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-tags" aria-hidden="true"></i>
                        <p>
                            Data Produk
                        </p>
                    </a>
                </li>
                </li>
                <li class="nav-item">
                    <a href="/dataPenjualan" class="nav-link
<?php echo e($slug == 'penjualan' ? 'active' : ''); ?>">
                        <i class="nav-icon fa fa-shopping-cart" aria-hidden="true"></i>
                        <p>
                            Data Penjualan
                        </p>
                    </a>
                </li>

                <!-- <div class="d-flex align-items-end"> -->
                <li class="nav-item">
                    <a href="<?php echo e(route('logout')); ?>" class="nav-link"
                        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-arrow-circle-left" aria-hidden="true"></i>
                        <?php echo e(__('Logout')); ?>


                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </a>
                </li>

                <!-- </div> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
</div>
</nav>

<!-- <div class="" >
    <a class="" href="<?php echo e(route('logout')); ?>"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        <?php echo e(__('Logout')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
</div> -->
<?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/layoutkaryawan/sidebar.blade.php ENDPATH**/ ?>