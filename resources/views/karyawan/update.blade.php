@extends('layoutadmin.main')
@section('content')
    <h2>Update Data Customer</h2>
    <form action="/dataCustomer/updateCust/{{ $dataCust->id }}" method="POST" enctype="multipart/form-data">
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
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
    @endsection