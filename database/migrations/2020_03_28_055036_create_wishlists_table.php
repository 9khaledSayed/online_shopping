<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id');
            $table->bigInteger('product_id');
            $table->bigInteger('quantity');
            $table->timestamps();

//            $table->foreign('customer_id')
//                ->references('id')
//                ->on('customers')
//                ->onDelete('cascade');
//
//            $table->foreign('product_id')
//                ->references('id')
//                ->on('products')
//                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlists');
    }
}
