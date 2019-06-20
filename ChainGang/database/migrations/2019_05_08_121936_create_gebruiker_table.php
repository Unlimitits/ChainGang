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
            $table->string('email')->unique();
            $table->string('gebruiker_telefoonnummer');
            $table->string('password');
            $table->rememberToken();
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
