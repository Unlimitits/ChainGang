<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GebruikerIdToMedewerker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medewerker', function (Blueprint $table) {
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
        Schema::table('medewerker', function (Blueprint $table) {
            //
        });
    }
}
