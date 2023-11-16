<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id('ReviewID');
            $table->foreignId('ProductID')->constrained('products', 'ProductID');
            $table->foreignId('CustomerID')->constrained('customers', 'CustomerID');
            $table->integer('Rating');
            $table->text('Comment');
            $table->timestamp('ReviewDate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_reviews');
    }
}
