<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContacts extends Migration
{
    // *
    //  * Run the migrations.
    //  *
    //  * @return void
     
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('address', 128)->nullable();
            $table->string('phone', 128)->nullable();
            $table->string('email')->nullable();
            $table->text('text')->nullable();
            $table->text('shorttext')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('shopname')->nullable();
            $table->text('mapsrc')->nullable();
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('contacts');

    }
}