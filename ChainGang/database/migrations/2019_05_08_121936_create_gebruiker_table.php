<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGebruikerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gebruiker', function (Blueprint $table) {
            $table->increments('gebruiker_id');
            $table->string('gebruiker_voornaam');
            $table->string('gebruiker_achternaam');
            $table->string('gebruiker_emailadres');
            $table->string('gebruiker_telefoonnummer');
            $table->string('gebruiker_gebruikersnaam');
            $table->string('gebruiker_wachtwoord');
            $table->binary('gebruiker_foto');
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
        Schema::dropIfExists('gebruiker');
    }
}
