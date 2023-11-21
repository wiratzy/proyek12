@extends('layoutadmin.main')
@section('content')
    <h2>Update Data Karyawan</h2>
    <form action="/dataKaryawan/updateKaryawan/{{ $dataKaryawan->id }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $dataKaryawan->id }}">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" 
            value="{{ $dataKaryawan->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-control"
            value="{{ $dataKaryawan->email }}" required>
        </div>
        <a href="/dataKaryawan" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    @endsection