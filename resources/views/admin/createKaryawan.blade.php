@extends('layoutadmin.main')
@section('content')
    <h2>Penambahan Customer</h2>
    <form action="/dataKaryawan/storeKaryawan" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control"   required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="text" name="email" class="form-control"  required >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <input type="file" name="image">
        </div>
        <a href="/dataKaryawan" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>

    @endsection