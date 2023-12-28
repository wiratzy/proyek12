<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('adminlte')); ?>/dist/img/cat.jpg""/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Ionicons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/LineIcons.2.0.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/animate.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/main.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css')); ?>/indexproducts.css" />

    <!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('adminlte')); ?>/plugins/fontawesome-free/css/all.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- FONT LILITA ONE -->
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<!-- FONT RETHINK SANS -->
<link href="https://fonts.googleapis.com/css2?family=Rethink+Sans&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@500&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Preahvihear&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
<header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand " href="/products">
                  <img src="<?php echo e(asset('adminlte')); ?>/dist/img/logork.png" alt="Logo" class="siz" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                  <ul id="nav" class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#produk">Produk</a>
                    </li>
                    

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php else: ?>
                            <?php if(Auth::user()->role == "customer") : ?>
                                <li class="nav-item">
                                    <a  href="/products/wishlist">Wishlist</a>
                                </li>
                            </ul>
                        </div>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?></a>
                                </li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                </form>
                            <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li> -->
                            <?php elseif(Auth::user()->role == "karyawan") : ?>
                                <li class="nav-item">
                                    <a  href="/products/wishlist">Wishlist</a>
                                </li>
                            </ul>
                        </div>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?></a>
                                </li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                </form>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboardKaryawan">
                                        Dashboard
                                    </a>
                            </li>
                                </div>
                            </li>
                            <?php elseif(Auth::user()->role == "admin") : ?>
                                <li class="nav-item">
                                    <a  href="/products/wishlist">Wishlist</a>
                                </li>
                            </ul>
                        </div>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?></a>
                                </li>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                </form>
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboardKaryawan">
                                        Dashboard
                                    </a>
                            </li>

                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ========================= header end ========================= -->


        <main class="pt-0">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('js')); ?>/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="<?php echo e(asset('js')); ?>/count-up.min.js"></script>
    <script src="<?php echo e(asset('js')); ?>/wow.min.js"></script>
    <script src="<?php echo e(asset('js')); ?>/main.js"></script>
    <script src="<?php echo e(asset('js')); ?>/indexproducts.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\proyek12\resources\views/layouts/app.blade.php ENDPATH**/ ?>