<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CandidadosDoPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('CandidadosDoPedido', function (Blueprint $table) {
        
          $table->id();
          $table->unsignedBigInteger('PedidoID');
          $table->unsignedBigInteger('PersonalID');
      });

      Schema::table('CandidadosDoPedido', function (Blueprint $table) {

          $table->foreign('PersonalID')->references('id')->on('PersonalTrainer')->onDelete('cascade');
          $table->foreign('PedidoID')->references('id')->on('Pedido')->onDelete('cascade');
      });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CandidadosDoPedido');
    }
}
