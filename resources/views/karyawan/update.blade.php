@extends('layoutkaryawan.main')
@section('content')
    <h2>Update Data Customer</h2>
    
    

    <form action="/dataCustomer/updateCust/{{ $dataCust->id }}" method="POST" enctype="multipart/form-data" id="buttonsuccessedit">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $dataCust->id }}">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" 
            value="{{ $dataCust->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-control"
            value="{{ $dataCust->email }}" required>
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
                
        });
        setTimeout(() => {
            document.getElementById('buttonsuccessedit').submit();
        }, 1000);
        
        };
    }
         );
    });
    
    </script>
    @endsection
    <script
src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous"></script>
  
