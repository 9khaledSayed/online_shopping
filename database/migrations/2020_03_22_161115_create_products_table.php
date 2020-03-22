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
            $table->integer('category_child_id')->unsigned();
            $table->string('description');
            $table->decimal('price',6,1);
            $table->string('image');
            $table->timestamps();

            //$table->foreign('category_child_id')->references('id')->on('category_child');

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
