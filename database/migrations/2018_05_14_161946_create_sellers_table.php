<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
	$table->string('website');
	$table->string('phone');
            // Field about reseellers


            $table->timestamps();


            // Foreign key related to mangas by manga_reseller
            // TODO : create migration manga_reseller to attach 1 manga to 1 seller, each line of manga_reset has 1 price
            // Ex : Bleach 1 selled by Kaze will cost 5.66€
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
