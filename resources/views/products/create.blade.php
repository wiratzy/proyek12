    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="ProductCode">ProductCode:</label>
        <input type="text" name="ProductCode" id="ProductCode"><br>
        
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" required><br>

        <label for="Description">Description:</label>
        <textarea name="Description" id="Description" required></textarea><br>

        <label for="Price">Price:</label>
        <input type="text" name="Price" id="Price" required><br>
       
        

        <label for="Stock">Stock:</label>
        <input type="number" name="Stock" id="Stock" required><br>

        <label for="ImageURL">Image URL:</label>
        <input type="file" name="ImageURL" id="ImageURL" required><br>


        <button type="submit">Create Product</button>
    </form>
</body>
</html>
