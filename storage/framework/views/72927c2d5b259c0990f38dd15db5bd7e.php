

<?php $__env->startSection('content'); ?>
<style>
    body{
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
.title{
    margin-bottom: 5vh;
}
.card{
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title b{
    font-size: 1.5rem;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-top: 4.5rem;
}
h5{
    margin-top: 4vh;
}
hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn{
    background-color: #000;
    border-color: #000;
    color: white;
    width: 100%;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 1vh;
    border-radius: 0;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none; 
}
.btn:hover{
    color: white;
}
a{
    color: black; 
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
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
a{
    text-decoration: none;
}
</style>
<body class="antialiased">
<div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            <div class="col align-self-center text-right ">total: <?php echo e($cartq); ?></div>
                        </div>
                    </div>    
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo e(asset('storage/'. $item->product->ImageURL)); ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?php echo e($item->product->ProductCode); ?></div>
                                <div class="row"><?php echo e($item->product->Name); ?></div>
                            </div>
                            <div class="col quantity-changer">
    <a href="#" class="quantity-btn" onclick="decrementQuantity(event)">-</a>
    <span class="quantity-display">1</span>
    <a href="#" class="quantity-btn" onclick="incrementQuantity(event)">+</a>
</div>
                            <div class="col" id="totalPrice">Rp. <?php echo e(number_format($item->product->Price, 0, ',', '.')); ?> <span class="close"><form id="formRemove" action="<?php echo e(route('cart.remove', $item->product)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-outline-primary">
        &#10005;
        </button>
    </form></span></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="back-to-shop"><a href="/products">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
                </div>
                
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&euro; 132.00</div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&euro; 137.00</div>
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
</body>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.kategori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Riski Firmansah\Documents\Skool\SEM 3\proyek12\resources\views/cart/index.blade.php ENDPATH**/ ?>