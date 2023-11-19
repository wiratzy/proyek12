@extends ('layoutadmin.main')
@section ('content')
        
                <table class="table table-bordered table-striped" id="example1">
                        <thead>
                                <tr>
                                        
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        
                                        
                                        <th><a href="/dataCustomer/createCust" class="btn btn-success">Tambah Data</a></th>
</tr>
</thead>
                        <tbody>
                                
                                @foreach ($dataCust as $item)
                                <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <!-- <td class="text-center"><img width="50" height="50" src="{{ asset($item->image_path) }}" class="img-responsive"></td> -->
                                        <td>
                                            <a href="/dataCustomer/editCust/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/dataCustomer/destroyCust/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Hapus</a>
                                            <a href="/dataCustomer/resetPassword/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Reset Password</a>
                                        </td>
</tr>
<?php $no++;?>
@endforeach
</tbody>
</table>
@endsection