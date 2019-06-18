<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestellingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestelling', function (Blueprint $table) {
            $table->increments('bestelling_id');
            $table->unsignedInteger('user_id');
//            $table->unsignedInteger('fiets_id');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('rekeningnummer');
            $table->string('adres');
            $table->text('cart');
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
        Schema::dropIfExists('bestelling');
    }
}
