<?php $__env->startSection('content'); ?>
<style>
  a{
    text-decoration: none;
  }
  .cart-btn {
    transition: transform 0.3s ease-in-out;
}

.cart-btn:hover {
    transform: scale(1.5);
}
</style>
<body class="antialiased">
    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="ytp-spinner">
          <div class="ytp-spinner-container">
            <div class="ytp-spinner-rotator">
              <div class="ytp-spinner-left">
                <div class="ytp-spinner-circle"></div>
              </div>
              <div class="ytp-spinner-right">
                <div class="ytp-spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- preloader end -->

        
    <!-- ========================= search-section start ========================= -->
    <section id="home" class="hero-section">
			<div class="background-container">
				<img src="<?php echo e(asset('adminlte')); ?>/dist/img/bgheadline.jpg" alt="" >
			</div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".2s">Hi<span>Kecantikan Sehat Dimulai dari Pilihan Produk yang Tepat! </span> </h1>
              <p class="wow fadeInUp" data-wow-delay=".4s">
              Temukan Ragam Kosmetik Berkualitas Tinggi
            </p>
              <form action="/frontend/index" method="GET">
              <div class="justify-content-center d-flex">
                    <div class="input-group mb-3  y ">
                        <input type="text" class="form-control " placeholder="Search..." name="search"
                               value="<?php echo e(request('search')); ?>">
                            <button class="btn btn-danger" type="submit"><i class=" fa fa-search" ></i>  Cari Produk</button>
                    </div>
                </div>
            </form>
            </div>
					</div>
					<!-- <div class="col-lg-6">
						<div class="hero-img wow fadeInUp" data-wow-delay=".5s">
							<img src="assets/img/hero/hero-img.jpg" alt="">
						</div>
					</div> -->
        </div>
      </div>
    </section>
		<!-- ========================= search-section end ========================= -->

		<!-- ========================= service-section start ========================= -->
		<section id="kategori" class="service-section pt-150">
			<div class="container category rounded shadow-lg p-3 mb-5 bg-body ">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8">
						<div class="section-title text-center mb-70">
							<span class="wow fadeInUp" data-wow-delay=".2s">Kategori</span>
							<h1 class="wow fadeInUp" data-wow-delay=".4s">Semua Produk Yang Anda Butuhkan!</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
                        <a href="products/makeup" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".2s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/makeup-pouch.png"  alt="">
							</div>
							<div class="content">
								<h3>Make Up</h3>
								<p>Daftar layanan produk make up yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6">
                        <a href="products/skincare" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".4s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/skincare.png" alt="">
							</div>
							<div class="content">
								<h3>Skincare</h3>
								<p>Daftar layanan produk skincare yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6">
                        <a href="products/haircare" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".6s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/beauty.png" alt="">
							</div>
							<div class="content">
								<h3>Haircare</h3>
								<p>Daftar layanan produk haircare yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6">
                        <a href="products/bodycare" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".2s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/clean.png" alt="">
							</div>
							<div class="content">
								<h3>Bodycare</h3>
								<p>Daftar layanan produk bodycare yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6">
                        <a href="products/aksesoris" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".4s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/brushes.png" alt="">
							</div>
							<div class="content">
								<h3>Aksesoris Kecantikan</h3>
								<p>Daftar layanan produk aksesoris kecantikan yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
					<div class="col-lg-4 col-md-6">
                        <a href="products/parfum" class="text-dark">
						<div class="single-service wow fadeInUp" data-wow-delay=".6s">
							<div class="icon">
								<img src="<?php echo e(asset('adminlte')); ?>/dist/img/parfum.png" alt="">
							</div>
							<div class="content">
								<h3>Parfum</h3>
								<p>Daftar layanan produk parfum yang tersedia di toko Ririn Kosmetik.</p>
							</div>
						</div>
                        </a>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= service-section end ========================= -->

<section id="layanan">
<input type="radio" name="scene" id="scene-1" value="1" checked />
<input type="radio" name="scene" id="scene-2" value="2" />
<input type="radio" name="scene" id="scene-3" value="3" />
<input type="radio" name="scene" id="scene-4" value="4" />

<main id="site" style="width: 100%" class="wow fadeInUp">
  <header class="top-nav">
    Layanan
  </header>
  <div class="ocean">
    <div class="ocean-text">Layanan</div>
  </div>
  <div class="left-side">
    <div class="page-numbers" data-total="04">
      <div class="page-number -tens">0</div>
      <div class="page-number -ones">
        1<br />2<br />3<br />4
      </div>
    </div>
  </div>
  <div class="hero">
    <div class="layer" data-scene="1">
      <h1 class="heading">
        Halaman<br />
        Detail Produk<br />
        yang Informatif
      </h1>
    </div>
    <div class="layer" data-scene="2">
      <h1 class="heading">
        Pencarian<br />
        Real-Time
      </h1>
    </div>
    <div class="layer" data-scene="3">
      <h1 class="heading">
        Sistemt<br />
        Manajemen Stok
      </h1>
    </div>
    <div class="layer" data-scene="4">
      <h1 class="heading">
        Filter<br />
        Berdasarkan Kategori
      </h1>
    </div>
  </div>

  <div class="left-content">
    <div class="layer" data-scene="1">
      <div class="fact number">TRIVIA</div>
      <div class="fact subtitle">Penggunaan Sejak Zaman Kuno</div>
      <div class="fact description">Penggunaan kosmetik bukanlah fenomena modern. Budaya penggunaan kosmetik telah ada sejak zaman kuno, seperti yang terlihat dalam praktik kecantikan di Mesir kuno, Yunani, dan Roma.</div>
    </div>
    <div class="layer" data-scene="2">
      <div class="fact number">TRIVIA</div>
      <div class="fact subtitle">Rias Wajah Sebagai Seni<sup>2</sup></div>
      <div class="fact description">Seni rias wajah telah menjadi bagian integral dari banyak budaya, termasuk seni tradisional seperti tari-tarian India atau opera Tiongkok, di mana rias wajah yang dramatis digunakan untuk mengekspresikan karakter.</div>
    </div>
    <div class="layer" data-scene="3">
      <div class="fact number">TRIVIA</div>
      <div class="fact subtitle">Kosmetik K-Beauty dari Korea</div>
      <div class="fact description">K-Beauty atau kosmetik Korea telah mendapat popularitas global. Produk skincare Korea terkenal karena fokus pada kelembaban dan tampilan kulit yang sehat.</div>
    </div>
    <div class="layer" data-scene="4">
      <div class="fact number">TRIVIA</div>
      <div class="fact subtitle">Deklarasi Keamanan Produk</div>
      <div class="fact description">Produk kosmetik biasanya diuji secara ketat untuk memastikan keamanan penggunaannya. Banyak negara memiliki badan pengawas khusus yang mengatur keamanan produk kosmetik.</div>
    </div>
  </div>
  <div class="right-content">

    <nav class="slide-nav">
      <div class="nav-button -prev">
        &lt;

        <label class="nav-toggle" for="scene-1">1</label>
        <label class="nav-toggle" for="scene-2">2</label>
        <label class="nav-toggle" for="scene-3">3</label>
        <label class="nav-toggle" for="scene-4">4</label>

      </div>
      <div class="nav-button -next">
        Next &gt;

        <label class="nav-toggle" for="scene-1">1</label>
        <label class="nav-toggle" for="scene-2">2</label>
        <label class="nav-toggle" for="scene-3">3</label>
        <label class="nav-toggle" for="scene-4">4</label>
      </div>
    </nav>

    <div class="layer" data-scene="1">
      <h2 class="heading">
      Halaman detail produk yang informatif.
      </h2>
      <p class="paragraph">
      Dengan merinci setiap aspek produk secara lengkap, Dapat membantu anda dalam membuat keputusan pembelian yang tepat. 
      </p>
    </div>

    <div class="layer" data-scene="2">
      <h2 class="heading">
      Pencarian Real-Time
      </h2>
      <p class="paragraph">
      Sistem pencarian  mampu memberikan hasil secara real-time saat anda mengetikkan kata kunci. Hal ini meningkatkan interaktivitas dan mempercepat proses pencarian produk anda.
      </p>
    </div>

    <div class="layer" data-scene="3">
      <h2 class="heading">
        Sistem Manajemen Stok
      </h2>
      <p class="paragraph">
      Menggunakan sistem manajemen stok yang terkomputerisasi untuk memantau dan mengelola inventaris.
      </p>
    </div>

    <div class="layer" data-scene="4">
      <h2 class="heading">
        Filter Berdasarkan Kategori
      </h2>
      <p class="paragraph">
      Anda dapat memilih kategori produk tertentu yang sesuai dengan kebutuhan atau minat anda.
      </p>
    </div>
  </div>
</main>
</section>

<section id="produk">
        <br>
        <div class="d-flex justify-content-between">
    
    <div class="text-start ms-5 ps-5 pt-4">
    <p class="text-category" style="font-size:2rem;">Produk Terbaru</p>
</div>
    <div class="text-end me-5 pe-5 pt-5">
    <a class="btn btn-outline-dark" href="/products/showAll" role="button">Semua Produk</a>

    
</div>
</div>
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3 flex-nowrap ms-1" style="overflow-x: auto; white-space: nowrap;">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="image-container">
                        <img src="<?php echo e(asset('storage/'. $product->ImageURL)); ?>" class="card-img-top h-50">
                        <div class="dark-overlay"></div>
                        <div class="button-overlay">
                            <!-- Add to Wishlist button with love icon -->
                            

                            <button type="button" class="btncolor " data-bs-toggle="modal" data-bs-target="#modal<?php echo e($product->id); ?>">
                                Detail
                            </button>
                        </div>
                        <div class="card shadow-sm" style="border-color: #fff">
                            <div class="card-body">
                                <p class="productName"><?php echo e($product->Name); ?></p>
                                
                                <h3><?php echo e($product->Price); ?></h3>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-body-secondary">Stock: <?php echo e($product->Stock); ?> </small>
                                    <!-- Tombol Add to Wishlist -->
                                    <form id="formAdd" action="<?php echo e(route('wishlist.add', $product)); ?>" method="post" >
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('post'); ?>
                                      <button  type="submit" class="btn cart-btn">
                                          <i class="<?php echo e($product->isInWishlist() ? 'fas' : 'far'); ?> fa-heart"></i>
                                          <?php echo e($product->isInWishlist() ? '' : ''); ?>

                                      </button>
                                  </form>
                                  
                                    <form id="formAdd" action="<?php echo e(route('cart.add', $product)); ?>" method="post" >
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('post'); ?>
                                      <button  type="submit" class="btn cart-btn">
                                          <i class="<?php echo e($product->isInCart() ? 'fas fa-shopping-cart' : 'fa fa-cart-plus'); ?>"></i>
                                          <?php echo e($product->isInCart() ? '' : ''); ?>

                                      </button>
                                  </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modal<?php echo e($product->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal<?php echo e($product->id); ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal<?php echo e($product->id); ?>Label">Product Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="overflow-x: auto; max-height: 300px;">
                                <?php echo e($product->Description); ?>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
    
</section>

    <div class="d-flex justify-content-end">
            <?php echo e($products->links()); ?>

        </div>

<!-- ========================= partners-section start ========================= -->
<section id="partner" class="partner-section pt-60 pb-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-partner wow fadeInUp" data-wow-delay=".2s">
							<img src="assets/img/partners/partner-1.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-partner wow fadeInUp" data-wow-delay=".4s">
							<img src="assets/img/partners/partner-2.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-partner wow fadeInUp" data-wow-delay=".6s">
							<img src="assets/img/partners/partner-3.svg" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-partner wow fadeInUp" data-wow-delay=".8s">
							<img src="assets/img/partners/partner-4.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ========================= partners-section end ========================= -->

            <!-- ========================= footer start ========================= -->
    <footer id="footer" class="footer pt-100 pb-70">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6">
						<div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
							<h3>About Us</h3>
							<ul class="links">
								<li>
									<a href="javascript:void(0)">Home</a>
								</li>
								<li>
									<a href="javascript:void(0)">Services</a>
								</li>
								<li>
									<a href="javascript:void(0)">About Us</a>
								</li>
								<li>
									<a href="javascript:void(0)">Contact</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
							<h3>About</h3>
							<ul class="links">
								<li>
									<a href="javascript:void(0)">Partners</a>
								</li>
								<li>
									<a href="javascript:void(0)">Terms of Service</a>
								</li>
								<li>
									<a href="javascript:void(0)">Privacy Policy</a>
								</li>
								<li>
									<a href="javascript:void(0)">Refund Policy</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
							<h3>Support</h3>
							<ul class="links">
								<li>
									<a href="javascript:void(0)">Open Ticket</a>
								</li>
								<li>
									<a href="javascript:void(0)">Community</a>
								</li>
								<li>
									<a href="javascript:void(0)">Return Policy</a>
								</li>
								<li>
									<a href="javascript:void(0)">Accessibility</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
    <!-- ========================= footer end ========================= -->

        <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>
    

<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/products/index.blade.php ENDPATH**/ ?>