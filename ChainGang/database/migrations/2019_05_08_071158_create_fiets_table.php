<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiets', function (Blueprint $table) {
            $table->increments('fiets_id');
            $table->string('fiets_naam');
            $table->string('fiets_merk');
            $table->string('fiets_type');
            $table->double('fiets_prijs');
            $table->string('fiets_omschrijving');
            $table->string('fiets_specificaties');
            $table->binary('fiets_foto');
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
        Schema::dropIfExists('fiets');
    }
}
