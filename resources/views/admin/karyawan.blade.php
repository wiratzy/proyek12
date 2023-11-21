@extends ('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th><a href="/dataKaryawan/createKaryawan" class="btn btn-success"><i class="fa fa-user-plus "></i>
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
                        <a href="/dataKaryawan/destroyKaryawan{{ $item->id }}" class="btn btn-sm btn-danger"><i
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
