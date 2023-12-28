<?php $__env->startSection('content'); ?>

<body class="antialiased">
    <html>
    <div class="bg">
    <h1>SEMUA PRODUK</h1>
  </div>

  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
        <?php echo $__env->make('layouts.navkategori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <!-- Card -->
    <div class="row justify-content-center mb-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 flex-nowrap g-3  ms-1" >
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                                    <div class="nft">
                                        <div class='main'>
                                        <img class='tokenImage' src="<?php echo e(asset('storage/'. $item->ImageURL)); ?>" alt="NFT" />
                                        <h2><?php echo e($item->Name); ?></h2>
                                        <p class='description' ><?php echo e($item->Description); ?></p>
                                        <div class='tokenInfo'>
                                            <div class="price">
                                            <ins>Rp.</ins>
                                            <p><?php echo e(number_format($item->Price, 0, ',', '.')); ?></p>
                                            </div>
                                            <div class="duration">
                                            <ins>Stok</ins>
                                            <p><?php echo e($item->Stock); ?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        </div>
                                    </div>
                                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
                        <!-- END CARD -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>



                    



                        </html>
</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.kategori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyek12\resources\views/kategori/showAll.blade.php ENDPATH**/ ?>