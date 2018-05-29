<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
              
            $table->increments('id');
            $table->string('english_name')->nullable();
            $table->string('synonyme')->nullable();
            $table->string('japanese_name')->nullable();
            $table->text('synopsis')->nullable();
            $table->datetime('last_publication')->nullable();
            $table->datetime('next_publication')->nullable();
            $table->integer('volumes')->nullable();
            $table->integer('chapters')->nullable();
            $table->string('country')->nullable();
            $table->string('authors')->nullable();
            $table->string('status')->nullable();
            $table->string('cover_picture')->nullable();

            // Fields abouts mangas ( in english )
            $table->timestamps();

            // Foreign key link to manga_type and another to manga_reseller
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
