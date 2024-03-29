@extends('layouts.kategori')

@section('content')
    <style>
        body {
            background: #ddd;
            min-height: 100vh;
            vertical-align: middle;
            display: flex;
            font-family: sans-serif;
            font-size: 0.8rem;
            font-weight: bold;
            justify-content: center;
            margin-top: 10%;
        }

        .title {
            margin-bottom: 5vh;
        }

        .card {
            margin: auto;
            max-width: 950px;
            width: 90%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media(max-width:767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
        }

        @media(max-width:767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #ddd;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65);
        }

        @media(max-width:767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title b {
            font-size: 1.5rem;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0 1vh;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
        }

        img {
            width: 3.5rem;
        }

        .back-to-shop {
            margin-top: 4.5rem;
        }

        h5 {
            margin-top: 4vh;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn {
            background-color: #000;
            border-color: #000;
            color: white;
            width: 100%;
            font-size: 0.7rem;
            margin-top: 4vh;
            padding: 1vh;
            border-radius: 0;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }

        .quantity-changer {
            display: flex;
            align-items: center;
        }

        .quantity-btn {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ddd;
            cursor: pointer;
            user-select: none;
        }

        .quantity-display {
            margin: 0 10px;
        }

        a {
            text-decoration: none;
        }
    </style>

    <body class="antialiased">
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                            <div class="col align-self-center text-right ">total jenis barang: {{ $cart->count() }}</div>
                        </div>
                    </div>

                    {{-- {{ dd($cart) }} --}}

                    <?php
                    $total = 0;
                    $jumlah_item = 0;
                    ?>
                    @foreach ($cart as $item)
                        <?php
                        
                        $jumlah_item = $jumlah_item + $item->qty;
                        
                        $product = App\Models\Product::where('id', $item->product_id)->first();
                        
                        $sub_harga = $item->qty * $item->price;
                        
                        $formated = number_format($sub_harga, 0, ',', '.');
                        
                        ?>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid"
                                        src="{{ asset('storage/' . $product->ImageURL) }}"></div>
                                <div class="col">
                                    <div class="row text-muted">{{ $product->ProductCode }}</div>
                                    <div class="row">{{ $product->Name }}</div>
                                </div>
                                <div class="col quantity-changer" data-cart-id="{{ $item->id }}"
                                    data-qty="{{ $item->qty }}">
                                    <a href="#" class="quantity-btn kurang" onclick="decrementQuantity(event)">-</a>
                                    <span class="quantity-display">{{ $item->qty }} </span>
                                    <a href="#" class="quantity-btn tambah" onclick="incrementQuantity(event)"
                                        id="tambah">+</a>
                                </div>
                                <div class="col" id="totalPrice">Rp. {{ $formated }} <span class="close">
                                        <form id="formRemove" action="{{ route('cart.remove', $product->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-primary">
                                                &#10005;
                                            </button>
                                        </form>
                                    </span></div>
                            </div>
                        </div>

                        <?php
                        $total = $total + $sub_harga;
                        ?>
                    @endforeach
                    <div class="back-to-shop"><a href="/products">&leftarrow;</a><span class="text-muted">Back to
                            shop</span></div>
                </div>

                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">total item: {{ $jumlah_item }} </div>
                        <div class="col text-right">Rp. {{ $total }}</div>
                    </div>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">Rp. {{ $total }}</div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>

        </div>
        <script>
            function incrementQuantity(event) {
                event.preventDefault();

                // Get the quantity display element
                var quantityDisplay = event.target.parentElement.querySelector('.quantity-display');

                // Increment the quantity
                var quantity = parseInt(quantityDisplay.textContent, 10);
                quantity++;

                // Update the quantity display
                quantityDisplay.textContent = quantity;
            }

            function decrementQuantity(event) {
                event.preventDefault();

                // Get the quantity display element
                var quantityDisplay = event.target.parentElement.querySelector('.quantity-display');

                // Decrement the quantity, but ensure it doesn't go below 1
                var quantity = parseInt(quantityDisplay.textContent, 10);
                quantity = Math.max(1, quantity - 1);

                // Update the quantity display
                quantityDisplay.textContent = quantity;
            }
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".tambah").click(function(e) {
                e.preventDefault();
                var ele = $(this);
                $.ajax({
                    url: "{{ route('tambahCart') }}",
                    method: "post",
                    data: {
                        cart_id: ele.parents("div").attr("data-cart-id"),
                        qty: ele.parents("div").attr("data-qty"),
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
            $(".kurang").click(function(e) {
                e.preventDefault();
                var ele = $(this);  
                $.ajax({
                    url: "{{ route('kurangCart') }}",
                    method: "post",
                    data: {
                        cart_id: ele.parents("div").attr("data-cart-id"),
                        qty: ele.parents("div").attr("data-qty"),
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
        </script>
    </body>
@endsection
