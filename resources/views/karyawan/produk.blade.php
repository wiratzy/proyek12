@extends ('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>

                <th>NO</th>
                <th>NAMA</th>
                <th>Produk Kode</th>
                <th>DESKRIPSI</th>
                <th>HARGA</th>
                <th>STOK</th>
                <th>GAMBAR</th>

                <th><a href="/dataProduk/createProduk" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> <i class="fa fa-user-plus fa-lg"></i>
                        Produk</a></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($dataProduk as $item)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->Name }}</td>
                    <td>{{ $item->ProductCode }}</td>
                    <td>{{ $item->Description }}</td>
                    <td>{{ $item->Price }}</td>
                    <td>{{ $item->Stock }}</td>
                    <td class="text-center"><img width="50" height="50"
                            src="{{ asset('/storage/images/' . $item->ImageURL) }}" class="img-responsive"></td>
                    <td>
                        <a href="/dataProduk/editProduk/{{ $item->ProductID }}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-wrench"></i> Edit</a>
                        <a href="/dataCustomer/destroyProduk/{{ $item->ProductID }}" class="btn btn-sm btn-danger">
                            Hapus</a>
                    </td>
                </tr>
                <?php $no++; ?>
            @endforeach
        </tbody>
    </table>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{ route('karyawan/createprod') }}" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="Name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="deskripsi">Deskripsi:</label>
                        <textarea name="Description" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="Price" class="form-label">Price:</label>
                        <input type="number" name="Price" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ProductCode" class="form-label">Produk kode:</label>
                        <input type="text" name="ProductCode" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Stock" class="form-label">Stock:</label>
                        <input type="number" name="Stock" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ImageURL" class="form-label">Image:</label>
                        <input type="file" name="ImageURL" class="form-control" required>
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
