//MENAMPILKAN SWEETALERT KETIKA MENGHAPUS DATA CUSTOMER
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


  //MENAMPILKAN SWEETALERT KETIKA MERESET PASSWORD COSTUMER
$( function() {
    $('a.resetpw-link').on('click', function(e) {
      e.preventDefault();
      var deleteUrl = $(this).attr('href');

      // Tampilkan SweetAlert konfirmasi penghapusan
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Password akan Direeset!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, reset!'
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
                'Password telah Direset.',
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
                'Terjadi kesalahan saat mereset data.',
                'error'
              );
            }
          });
        }
      });
    });
  });


  //BUTTON SUKSES MENAMBAHKAN CUSTOMER
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
 


//BUTTON SUCCESS UPDATE DATA CUSTOMER   
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
                
        });
        setTimeout(() => {
            document.getElementById('buttonsuccessedit').submit();
        }, 1000);
        
        };
    }
         );
    });
    


   

