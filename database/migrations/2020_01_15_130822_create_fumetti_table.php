<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettiTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('fumettis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titolo');
            $table->string('autore');
            $table->integer('anno');
            $table->text('recensione');
            $table->integer('voto');
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
        Schema::dropIfExists('fumetti');
    }
}
