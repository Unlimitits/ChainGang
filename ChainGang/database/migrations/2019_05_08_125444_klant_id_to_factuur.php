<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KlantIdToFactuur extends Migration
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
            $table->foreign('klant_id')->references('klant_id')->on('klant');

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
