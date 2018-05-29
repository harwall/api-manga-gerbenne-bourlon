<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_type', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('manga_id')->unsigned();
            $table->foreign('manga_id')->references('id')->on('mangas');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types');


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
        Schema::dropIfExists('manga_type');
    }
}
