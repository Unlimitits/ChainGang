<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNieuwsbriefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nieuwsbrief', function (Blueprint $table) {
            $table->increments('nieuwsbrief_id');

            $table->unsignedInteger('gebruiker_id');
            $table->string('nieuwsbrief_token_email')->nullable();
            $table->boolean('nieuwsbrief_email_verified')->default(false);

            $table->string('nieuwsbrief_titel');
            $table->dateTime('nieuwsbrief_datum');
            $table->multiLineString('nieuwsbrief_text');
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
        Schema::dropIfExists('nieuwsbrief');
    }
}
