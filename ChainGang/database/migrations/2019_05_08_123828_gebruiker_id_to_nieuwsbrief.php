<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GebruikerIdToNieuwsbrief extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nieuwsbrief', function (Blueprint $table) {
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
        Schema::table('nieuwsbrief', function (Blueprint $table) {
            //
        });
    }
}
