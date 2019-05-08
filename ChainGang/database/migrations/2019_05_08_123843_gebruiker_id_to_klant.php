<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GebruikerIdToKlant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('klant', function (Blueprint $table) {
            //
            $table->foreign('gebruiker_id')->references('gebruiker_id')->on('gebruiker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('klant', function (Blueprint $table) {
            //
        });
    }
}
