@extends('layouts.kategori')

@section('content')

<body class="antialiased">
    <html>
    <div class="bg">
    <h1>SEMUA PRODUK</h1>
  </div>

  <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
        @include('layouts.navkategori')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <!-- Card -->
    <div class="row justify-content-center mb-3">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 flex-nowrap g-3  ms-1" >
            @foreach ($products as $item)
            <div class="col">
                                    <div class="nft">
                                        <div class='main'>
                                        <img class='tokenImage' src="{{ asset('storage/'. $item->ImageURL) }}" alt="NFT" />
                                        <h2>{{ $item->Name }}</h2>
                                        <p class='description' >{{ $item->Description }}</p>
                                        <div class='tokenInfo'>
                                            <div class="price">
                                            <ins>Rp.</ins>
                                            <p>{{ number_format($item->Price, 0, ',', '.') }}</p>
                                            </div>
                                            <div class="duration">
                                            <ins>Stok</ins>
                                            <p>{{ $item->Stock }}</p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class='creator'>
                                            <div class='wrapper'>
                                            <form id="formAdd" action="{{ route('wishlist.add', $item) }}" method="post" >
    @csrf
    @method('post')
    <button  type="submit" class="btn">
        <i class="{{ $item->isInWishlist() ? 'fas' : 'far' }} fa-heart"></i>
        {{ $item->isInWishlist() ? '' : '' }}
    </button>
</form>
                                            </div>
                                            <p><ins>Add to</ins> Wishlist</p>
                                        
                                        </div>
                                        
                                        </div>
                                    </div>
                                    
                </div>
            @endforeach
        </div>
        </div>
                        <!-- END CARD -->
        </div>
        <!-- /#page-content-wrapper -->

    </div>



                    



                        </html>
</body>


@endsection