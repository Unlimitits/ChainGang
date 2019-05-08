<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FactuurIdToFietsFactuur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fiets_factuur', function (Blueprint $table) {
            //
            $table->foreign('factuur_id')->references('factuur_id')->on('factuur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fiets_factuur', function (Blueprint $table) {
            //
        });
    }
}
