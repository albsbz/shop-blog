<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('imgPath', 128)->nullable();
            $table->string('gallery')->nullable();
            $table->string('header');
            $table->text('text')->nullable();
            $table->string('slug', 64)->unique();
        });
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('article_categories')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('aricles');

    }
}