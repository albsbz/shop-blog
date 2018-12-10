<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('user_id')->unsigned()->nullable();
            $table->decimal('price', 7, 2)->nullable();
            $table->string('address', 32);
            $table->tinyInteger('status')->default(0);
           
            // 
        });
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('order_id')->unsigned()->nullable();
            $table->timestamps();
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('qtt')->unsigned();
            $table->decimal('price', 6, 2);

            
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
        Schema::table('order_items', function (Blueprint $table) {
          $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
          $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
        });

   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');

    }
}
