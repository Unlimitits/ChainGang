<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFietsFactuurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiets_factuur', function (Blueprint $table) {
            $table->increments('fiets_factuur_id');
            $table->unsignedInteger('fiets_id');
            $table->unsignedInteger('factuur_id');
            $table->integer('fiets_factuur_aantal');
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
        Schema::dropIfExists('fiets_factuur');
    }
}
