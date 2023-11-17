<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id('CartID');
            $table->foreignId('CustomerID')->constrained('customer', 'CustomerID');
            $table->string('Status');
            $table->timestamp('CreatedDate');
            $table->timestamp('UpdatedDate')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
