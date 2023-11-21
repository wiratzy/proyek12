<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h2>Update Product</h2>

    <form method="POST" action="<?php echo e(route('products.update', $product->ProductID)); ?>" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <label for="ProductCode">ProductCode:</label>
        <input type="text" name="ProductCode" id="ProductCode" value="<?php echo e($product->ProductCode); ?>"><br>
        
        <label for="Name">Name:</label>
        <input type="text" name="Name" id="Name" value="<?php echo e($product->Name); ?>" required><br>

        <label for="Description">Description:</label>
        <textarea name="Description" id="Description"  required><?php echo e($product->Description); ?></textarea><br>

        <label for="Price">Price:</label>
        <input type="text" name="Price" id="Price" value="<?php echo e($product->Price); ?>" required><br>
       
        

        <label for="Stock">Stock:</label>
        <input type="number" name="Stock" id="Stock" value="<?php echo e($product->Stock); ?>" required><br>

        <label for="ImageURL">Image URL:</label>
        <input type="text" name="ImageURL" id="ImageURL" value="<?php echo e($product->ImageURL); ?>" required><br>


        <button type="submit">Update Product</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\wiran\Documents\SEMESTER3\proyek\proyek12\resources\views/products/edit.blade.php ENDPATH**/ ?>