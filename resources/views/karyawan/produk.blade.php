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
                                        
                                        <th><a href="/dataProduk/createProduk" class="btn btn-success"> <i class="fa fa-user-plus fa-lg"></i>   Produk</a></th>
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
                                            <a href="/dataProduk/editProduk/{{ $item->ProductID }}"
                                            class="btn btn-sm btn-secondary"><i class="fa fa-wrench"></i>   Edit</a>
                                            <a href="/dataCustomer/destroyProduk/{{ $item->ProductID }}"
                                            class="btn btn-sm btn-danger">    Hapus</a>
                                        </td>
</tr>
<?php $no++;?>
@endforeach
</tbody>
</table>
@endsection