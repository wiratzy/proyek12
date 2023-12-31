<?php $__env->startSection('content'); ?>

<body class="antialiased">
    <html>
    <div class="bg">
    <h1>WISHLIST</h1>
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
    <div class="row justify-content-center mb-1">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" >
            <?php $__currentLoopData = $wishlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col p-3">
                                    <div class="nft">
                                        <div class='main'>
                                        <img class='tokenImage' src="<?php echo e(asset('storage/'. $item->product->ImageURL)); ?>" alt="NFT" />
                                        <h2><?php echo e($item->product->Name); ?></h2>
                                        <p class='description' ><?php echo e($item->product->Description); ?></p>
                                        <div class='tokenInfo'>
                                            <div class="price">
                                            <ins>Rp.</ins>
                                            <p><?php echo e(number_format($item->product->Price, 0, ',', '.')); ?></p>
                                            </div>
                                            <div class="duration">
                                            <ins>◷</ins>
                                            <p><?php echo e($item->product->Stock); ?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class='creator'>
                                            <div class='wrapper'>
                                            <form id="formRemove" action="<?php echo e(route('wishlist.remove', $item->product)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn">
            <i class="<?php echo e($item->product->isInWishlist() ? 'fas' : 'far'); ?> fa-heart"></i>
            <?php echo e($item->product->isInWishlist() ? ' ' : ' '); ?>

        </button>
    </form>
                                            </div>
                                            <p><ins>Remove from</ins> Wishlist</p>
                                        </div>
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
<?php echo $__env->make('layouts.kategori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/kategori/index.blade.php ENDPATH**/ ?>