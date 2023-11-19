@extends ('layoutadmin.main')
@section ('content')
        
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
                                        
                                        <th><a href="/dataProduk/createProduk" class="btn btn-success">Tambah Data</a></th>
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
                                        <td class="text-center"><img width="50" height="50" src="{{ asset('/storage/images/' . $item->ImageURL) }}"  class="img-responsive"></td>
                                        <td>
                                            <a href="/dataProduk/edit/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/dataCustomer/destroy/{{ $item->id }}"
                                            class="btn btn-sm btn-warning">Hapus</a>
                                        </td>
</tr>
<?php $no++;?>
@endforeach
</tbody>
</table>
@endsection