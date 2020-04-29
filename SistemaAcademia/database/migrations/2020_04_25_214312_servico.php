<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Servico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ClienteID');
            $table->unsignedBigInteger('PersonalID');
            $table->string('AtividadeFisica');
            $table->timestamps();

        });

        Schema::table('Servico', function (Blueprint $table) {
            $table->foreign('ClienteID')->references('id')->on('Cliente');
            $table->foreign('PersonalID')->references('id')->on('PersonalTrainer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Servico');
    }
}
