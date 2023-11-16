<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderDetailID');
            $table->foreignId('OrderID')->constrained('orders' , 'OrderID');
            $table->foreignId('ProductID')->constrained('products', 'ProductID');
            $table->integer('Quantity');
            $table->decimal('UnitPrice', 10, 2);
            $table->decimal('Subtotal', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
