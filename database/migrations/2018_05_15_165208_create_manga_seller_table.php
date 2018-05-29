<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaSellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_seller', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('manga_id')->unsigned();
            $table->foreign('manga_id')->references('id')->on('mangas');

            $table->integer('seller_id')->unsigned();
            $table->foreign('seller_id')->references('id')->on('sellers');

            $table->double('price')->nullable();

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
        Schema::dropIfExists('manga_seller');
    }
}
