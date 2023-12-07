<?php $__env->startSection('content'); ?>
    <h2>Update Data Customer</h2>
    
    

    <form action="/dataCustomer/updateCust/<?php echo e($dataCust->id); ?>" method="POST" enctype="multipart/form-data" id="buttonsuccessedit">
        <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($dataCust->id); ?>">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" 
            value="<?php echo e($dataCust->name); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-control"
            value="<?php echo e($dataCust->email); ?>" required>
        </div>
        <a href="/dataCustomer" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" id="buttonsuccessedit" class="btn btn-primary">SIMPAN</button>
    </form>
    <script>
        
        document.getElementById('buttonsuccessedit').addEventListener('submit', function (e) {
            e.preventDefault(); 
            Swal.fire({
                icon: "question",
                text: "Simpan Perubahan?",
                showCancelButton: true,
         confirmButtonText: 'Ya, Kirim!',
         cancelButtonText: 'Batal'
}).then((result) => {
         // Jika pengguna mengonfirmasi, kirim formulir
         if (result.isConfirmed) {
            
            Swal.fire({
                icon: "success",
                text: "data Berhasil Ditambahkan",
                confirmButtonText: 'Ya',
                
        });
        setTimeout(() => {
            document.getElementById('buttonsuccessedit').submit();
        }, 1000);
        
        };
    }
         );
    });
    
    </script>
    <?php $__env->stopSection(); ?>
    <script
src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous"></script>
  

<?php echo $__env->make('layoutkaryawan.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/karyawan/update.blade.php ENDPATH**/ ?>