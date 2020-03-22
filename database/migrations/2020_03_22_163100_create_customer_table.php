<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {

           // $table->bigIncrements('id');
           // $table->string('cust_name');
           // $table->string('cust_phone');
           // $table->text('cust_address');
           // $table->string('password')->nullable();
           // $table->string('email')->nullable();
           // $table->string('image');

           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
