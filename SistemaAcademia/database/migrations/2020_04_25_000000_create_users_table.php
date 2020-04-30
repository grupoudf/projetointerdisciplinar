<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('tipo_usuario')->default(1);
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

        Schema::table('Cliente', function (Blueprint $table) {
            $table->foreign('tipo_usuario')->references('id')->on('TipoUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');
    }
}
