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
        Schema::create('PersonalTrainer', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('TipoUsuario');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('AtividadeFisica');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('cpf');
            $table->string('telefone');
            $table->string('sexo');
            $table->date('nascimento');
            $table->timestamps();

           
        });

        Schema::table('PersonalTrainer', function (Blueprint $table) {
            $table->foreign('TipoUsuario')->references('id')->on('TipoUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
