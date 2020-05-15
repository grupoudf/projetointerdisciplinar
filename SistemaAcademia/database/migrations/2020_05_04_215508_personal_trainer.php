<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalTrainer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PersonalTrainer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('privilegios')->default(1);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('sexo');
            $table->date('nascimento');
            $table->unsignedBigInteger('AtividadeFisicaID');
            $table->string('telefone');
            $table->string('cpf');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('PersonalTrainer', function (Blueprint $table) {
            $table->foreign('privilegios')->references('id')->on('Previlegios');
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
      Schema::dropIfExists('PersonalTrainer');
    }
}
