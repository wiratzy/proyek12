@extends ('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th><a href="/dataKaryawan/createKaryawan" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-user-plus "></i>
                        Karyawan</a></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($dataKaryawan as $item)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <!-- <td class="text-center"><img width="50" height="50" src="{{ asset($item->image_path) }}" class="img-responsive"></td> -->
                    <td>
                        <a href="dataKaryawan/editKaryawan/{{ $item->id }}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-wrench"></i> Edit</a>
                        <a href="/dataKaryawan/destroyKaryawan/{{ $item->id }}" class="btn btn-sm btn-danger"><i
                                class="fa fa-trash"></i> Hapus</a>
                        <a href="/dataKaryawan/resetPassword/{{ $item->id }}" class="btn btn-sm btn-warning"><i
                                class="fa fa-recycle"></i> Reset Password</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Customer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="post" action="/dataKaryawan/storeKaryawan" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required></input>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Passowrd:</label>
                        <input type="password" name="password" class="form-control" required></input>
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
