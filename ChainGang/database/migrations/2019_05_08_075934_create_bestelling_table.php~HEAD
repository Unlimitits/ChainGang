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
            $table->unsignedInteger('klant_id');
            $table->unsignedInteger('fiets_id');
            $table->integer('bestelling_aantal');
            $table->dateTime('bestelling_datum');
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
