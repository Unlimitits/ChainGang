<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedewerkerIdToFactuur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factuur', function (Blueprint $table) {
            //
            $table->foreign('medewerker_id')->references('medewerker_id')->on('medewerker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factuur', function (Blueprint $table) {
            //
        });
    }
}
