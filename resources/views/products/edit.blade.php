<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h2>Update Product</h2>

    <form method="POST" action="{{ route('products.update', $product->ProductID) }}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')
        <label for="ProductCode">ProductCode:</label>
        <input type="text" name="ProductCode" id="ProductCode" value="{{ $product->ProductCode }}"><br>
        
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" value="{{ $product->Name }}" required><br>

        <label for="Description">Description:</label>
        <textarea name="Description" id="Description"  required>{{ $product->Description }}</textarea><br>

        <label for="Price">Price:</label>
        <input type="text" name="Price" id="Price" value="{{ $product->Price }}" required><br>
       
        

        <label for="Stock">Stock:</label>
        <input type="number" name="Stock" id="Stock" value="{{ $product->Stock }}" required><br>

        <label for="ImageURL">Image URL:</label>
        <input type="text" name="ImageURL" id="ImageURL" value="{{ $product->ImageURL }}" required><br>


        <button type="submit">Update Product</button>
    </form>
</body>
</html>
