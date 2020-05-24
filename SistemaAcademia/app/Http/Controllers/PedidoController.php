<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtividadesFisicas;
use App\Pedido;

class PedidoController extends Controller
{
    public function FormCriarPedido(){
      // Pegando todas as atividades fisicas do personal para poder enviar para view
      $atividades = AtividadesFisicas::all();

      return view('CriarPedido',['atividades'=> $atividades]);
    }

    public function CriarPedido(Request $request){

      $pedido = new Pedido();

      $pedido->UserID = $request->UserID;
      $pedido->AtividadeFisicaID = $request->AtividadeFisica;
      $pedido->Titulo = $request->Titulo;
      $pedido->Descricao = $request->Descricao;

      $pedido->save();

      return redirect()->route('home');
    }
}
