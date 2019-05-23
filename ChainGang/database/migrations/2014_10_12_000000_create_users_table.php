<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_gebruikersnaam')->unique();
            $table->string('user_wachtwoord');
            $table->string('user_voornaam');
            $table->string('user_achternaam');
            $table->string('user_emailadres');
            $table->string('user_telefoonnummer');
            $table->string('user_straat');
            $table->string('user_postcode');
            $table->string('user_plaats');
            $table->string('user_foto')->nullable();
            $table->boolean('user_wilNieuwsbrief')->default(false);
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
        Schema::dropIfExists('users');
    }
}
