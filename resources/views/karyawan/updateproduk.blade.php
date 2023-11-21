@extends('layoutkaryawan.main')
@section('content')
    <h2>Update Data Customer</h2>
    <form action="/dataProduk/updateProduk/{{ $dataProduk->ProductID }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="hidden" name="ProductID" value="{{ $dataProduk->ProductID }}">
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="Name" class="form-control" 
            value="{{ $dataProduk->Name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">DESKRIPSI</label>
            <input type="text" name="Description" class="form-control"
            value="{{ $dataProduk->Description }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">HARGA</label>
            <input type="number" name="Price" class="form-control"
            value="{{ $dataProduk->Price }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">STOK</label>
            <input type="number" name="Stock" class="form-control"
            value="{{ $dataProduk->Stock }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">KODE PRODUK</label>
            <input type="text" name="ProductCode" class="form-control"
            value="{{ $dataProduk->ProductCode }}" required>
        </div>
        <a href="/dataproduk" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    @endsection