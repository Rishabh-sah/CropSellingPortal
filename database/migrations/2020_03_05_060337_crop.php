<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Crop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('quantity');
            $table->date('harvest_date');
            $table->string('image');
            $table->integer('price');  
            $table->bigInteger('user_id')->references('id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
