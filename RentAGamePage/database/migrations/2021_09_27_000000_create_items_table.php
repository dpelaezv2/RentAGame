<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('fullPrice');
            $table->string('forRent');
            $table->integer('rentTime');
            $table->bigInteger('order')->unsigned();
            $table->foreign('order')->references('id')->on('orders');
            $table->bigInteger('videoGame')->unsigned();
            $table->foreign('videoGame')->references('id')->on('videogames');
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
        Schema::dropIfExists('items');
    }
}