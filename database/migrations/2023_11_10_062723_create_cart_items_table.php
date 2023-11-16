<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('CartItemID');
            $table->foreignId('CartID')->constrained('carts', 'CartID');
            $table->foreignId('ProductID')->constrained('products', 'ProductID');
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
