<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h2>Create Product</h2>

    <!-- <form method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

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
        <input type="text" name="ImageURL" id="ImageURL" required><br>


        <button type="submit">Create Product</button>
    </form> -->
    <form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="nama">Nama:</label>
    <input type="text" name="Name" required>
    
    <label for="deskripsi">Deskripsi:</label>
    <textarea name="Description" required></textarea>
    
    <label for="Price">Price:</label>
    <input type="number" name="Price" required>
    
    <label for="ProductCode">Produk kode:</label>
    <input type="text" name="ProductCode" required>
    
    <label for="Stock">Stock:</label>
    <input type="number" name="Stock" required>

    <label for="ImageURL">Image:</label>
    <input type="file" name="ImageURL">

    <button type="submit">Submit</button>
</form>
</body>
</html>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/karyawan/createprod.blade.php ENDPATH**/ ?>