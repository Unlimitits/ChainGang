<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('review_id');
            $table->unsignedInteger('klant_id');
            $table->unsignedInteger('fiets_id');
            $table->string('review_titel');
            $table->string('review_omschrijving');
            $table->integer('review_waardering');
            $table->boolean('review_isApproved');



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
        Schema::dropIfExists('review');
    }
}
