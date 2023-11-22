@extends('layouts.app')

@section('content')
<body class="antialiased">
    <div class="container">
        <h1 class="text-center">Display Product</h1>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/products" method="GET">
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                      </div>
                </form>
            </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($products as $product)
            <div class="col">
                <img src="{{ asset('storage/'. $product->ImageURL) }}" alt="">
                <div class="card shadow-sm">
                    <div class="card-body">
                            <h3>{{ $product->Name }}</h3>
                            <p class="card-text">{{ $product->Description }}</p>
                            <h3>{{ $product->Price }}</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-body-secondary">Stock: {{ $product->Stock }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>

    <div class="" >
        <a class="" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @endsection
</body>
</html>
