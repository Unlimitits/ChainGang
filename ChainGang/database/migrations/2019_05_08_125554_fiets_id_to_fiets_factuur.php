<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FietsIdToFietsFactuur extends Migration
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
            $table->foreign('fiets_id')->references('fiets_id')->on('fiets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
    public function down()
    {
        Schema::table('fiets_factuur', function (Blueprint $table) {
            //
        });
    }
}
