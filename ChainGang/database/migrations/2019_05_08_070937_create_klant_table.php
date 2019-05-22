<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klant', function (Blueprint $table) {
            $table->increments('klant_id');
            $table->string('klant_gebruikersnaam');
            $table->string('klant_wachtwoord');
            $table->string('klant_voornaam');
            $table->string('klant_achternaam');
            $table->string('klant_emailadres');
            $table->string('klant_telefoonnummer');
            $table->string('klant_straat');
            $table->string('klant_postcode');
            $table->string('klant_plaats');
            $table->string('klant_foto');
            $table->boolean('klant_wilNieuwsbrief');
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
        Schema::dropIfExists('klant');
    }
}
