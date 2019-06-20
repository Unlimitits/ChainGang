<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AanbiedingIdToAanbiedingen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fiets', function (Blueprint $table) {
            $table->foreign('aanbieding_id')->references('aanbieding_id')->on('aanbieding')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fiets', function (Blueprint $table) {
            //
        });
    }
}
