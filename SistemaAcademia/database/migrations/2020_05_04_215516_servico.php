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
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('PersonalID');
            $table->unsignedBigInteger('AtividadeFisicaID');
            $table->timestamps();

        });

        Schema::table('Servico', function (Blueprint $table) {
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('PersonalID')->references('id')->on('PersonalTrainer')->onDelete('cascade');
            $table->foreign('AtividadeFisicaID')->references('id')->on('AtividadesFisicas');
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
