@extends('layouts.header')
<h2>Show Product</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ProductID</th>
            <th scope="col">Name</th>
            <th scope="col">ProductCode</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->ProductID }}</th>
                <td>{{ $product->Name }}</td>
                <td>{{ $product->ProductCode }}</td>
                <td>{{ $product->Description }}</td>
                <td>{{ $product->Price }}</td>
                <td>{{ $product->Stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->ProductID) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
