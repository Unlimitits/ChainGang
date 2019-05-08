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
            $table->string('naam');
            $table->string('merk');
            $table->string('type');
            $table->double('prijs');
            $table->string('omschrijving');
            $table->string('specificaties');
            $table->binary('foto');
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
