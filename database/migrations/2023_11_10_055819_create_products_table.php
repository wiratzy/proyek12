

<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CategoryID')->nullable();
            $table->foreignId('BrandID')->nullable();
            $table->string('Name');
            $table->string('ProductCode');
            $table->text('Description');
            $table->decimal('Price', 10, 2);
            $table->integer('Stock');
            $table->string('ImageURL')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
