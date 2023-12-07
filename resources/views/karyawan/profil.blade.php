@extends('layoutkaryawan.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h5>{{ __('Edit Profile Karyawan') }}</h5></div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="/dataKaryawan/updateProfil/ {{ $dataProfil->id }}" enctype="multipart/form-data" id="buttonsuccess">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', Auth::user()->email) }}" required autocomplete="email" autofocus disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Nama Karyawan') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', Auth::user()->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="current_password">{{ __('Password Sekarang') }}</label>
                                <input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">

                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="new_password">{{ __('Password Baru') }}</label>
                                <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" autocomplete="new-password">

                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="new_password_confirmation">{{ __('Konfirmasi Password Baru') }}</label>
                                <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" autocomplete="new-password">
                            </div>

                            <button type="submit"  class="btn btn-primary">
                                {{ __('Konfirmasi Perubahan') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('buttonsuccess').addEventListener('submit', function (e) {
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
            document.getElementById('buttonsuccess').submit();
         }
      });
   });
    </script>
@endsection