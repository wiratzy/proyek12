<?php $__env->startSection('content'); ?>
        
                <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                        
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        
                                        
                                        <th><a href="/dataCustomer/createCust" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-user-plus "></i>  Customer</a></th>
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
                                            class="btn btn-sm btn-danger delete-link" ><i class="fa fa-trash" "></i>   Hapus</a>
                                            <a href="/dataCustomer/resetPassword/<?php echo e($item->id); ?>"
                                            class="btn btn-sm btn-warning"><i class="fa fa-recycle"></i>   Reset Password</a>
                                        </td>
</tr>
<?php $no++;?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Customer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="/dataCustomer/storeCust" enctype="multipart/form-data" id="buttonsuccess">
                    <?php echo e(csrf_field()); ?>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required></input>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script>
    $( function() {
    $('a.delete-link').on('click', function(e) {
      e.preventDefault();
      var deleteUrl = $(this).attr('href');

      // Tampilkan SweetAlert konfirmasi penghapusan
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Data akan dihapus!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          // Send the delete request to the server (using AJAX if needed)
          $.ajax({
            url: deleteUrl,
            method: 'GET',
            success: function() {
              // On success, show SweetAlert success message
              Swal.fire(
                'Berhasil!',
                'Data telah dihapus.',
                'success'
              ).then(() => {
                // Reload the page after a short delay
                setTimeout(function() {
                  location.reload();
                }, 100); // 500 milliseconds delay, adjust as needed
              });
            },
            error: function() {
              // On error, show SweetAlert error message
              Swal.fire(
                'Gagal!',
                'Terjadi kesalahan saat menghapus data.',
                'error'
              );
            }
          });
        }
      });
    });
  });
  document.getElementById('buttonsuccess').addEventListener('submit', function (e) {
            e.preventDefault(); 
            Swal.fire({
                icon: "success",
                text: "data Berhasil Ditambahkan",
                showClass: {
            popup: 'animated bounceIn' // Animasi masuk (gunakan animasi dari library animasi, seperti animate.css)
         },
         hideClass: {
            popup: 'animated bounceOut' // Animasi keluar
         }
}).then((result) => {
         // Jika pengguna mengonfirmasi, kirim formulir
         if (result.isConfirmed) {
            document.getElementById('buttonsuccess').submit();
         }
      });
   });
    </script>

<?php echo $__env->make('layoutkaryawan.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/karyawan/customer.blade.php ENDPATH**/ ?>