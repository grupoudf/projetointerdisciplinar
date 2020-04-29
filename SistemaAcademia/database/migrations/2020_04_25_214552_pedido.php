<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ClienteId');
            $table->string('AtividadeFisica');
            $table->timestamps();

        });

        Schema::table('Pedido', function (Blueprint $table) {
            $table->foreign('ClienteId')->references('id')->on('Cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pedido');
    }
}
