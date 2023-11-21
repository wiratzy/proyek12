
<?php $__env->startSection('content'); ?>
        
                <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                        
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        
                                        
                                        <th><a href="/dataCustomer/createCust" class="btn btn-success"><i class="fa fa-user-plus "></i>  Customer</a></th>
</tr>
</thead>
                        <tbody>
                                
                                <?php $__currentLoopData = $dataCust; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                        <td><?php echo e($no); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <!-- <td class="text-center"><img width="50" height="50" src="<?php echo e(asset($item->image_path)); ?>" class="img-responsive"></td> -->
                                        <td>
                                            <a href="/dataCustomer/editCust/<?php echo e($item->id); ?>"
                                            class="btn btn-sm btn-secondary"><i class="fa fa-wrench"></i>  Edit</a>
                                            <a href="/dataCustomer/destroyCust/<?php echo e($item->id); ?>"
                                            class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>   Hapus</a>
                                            <a href="/dataCustomer/resetPassword/<?php echo e($item->id); ?>"
                                            class="btn btn-sm btn-warning"><i class="fa fa-recycle"></i>   Reset Password</a>
                                        </td>
</tr>
<?php $no++;?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutadmin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyek12\resources\views/karyawan/customer.blade.php ENDPATH**/ ?>