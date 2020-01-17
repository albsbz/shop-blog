<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('imgPath', 128)->nullable();
            $table->string('gallery')->nullable();
            $table->string('name', 64);
            $table->decimal('price', 6, 2);
            $table->string('description')->nullable();
            $table->boolean('recommended')->default(false);
            $table->string('slug', 64)->unique();
            $table->boolean('instock')->default(1);
            $table->integer('popularity')->default(0);
           
            
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('set null');
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
