<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('category_id')->unique();
            $table->string('description');
            $table->double('price');
            $table->double('sale_price');
            $table->double('quantity');
            $table->string('image');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelelte('cascade')
                  ->onupdate('cascade');

                  

    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
