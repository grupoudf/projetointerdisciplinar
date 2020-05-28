<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AtividadesFisicas;
use App\Pedido;
use App\User;


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



    public function VerPedidosUsuarioLogado($id){
      // Recuperando dados do usuario
      $user = User::find($id);

      // Recuperando todos os pedidos relacionado ao usuario encontrado a cima
      $pedidos = $user->Pedidos()->get();

      // Pegando todas as atividades fisicas do personal para poder enviar para view
      $atividades = AtividadesFisicas::all();

      return view('VerPedidos',['pedidos'=> $pedidos, 'usuario'=> $user,'atividades'=>$atividades]);
    }



   public function VerPedidoPersonal(){

     $pedidos = Pedido::all();

     return view('VerPedidoPersonal',['pedidos'=>$pedidos]);
   }



    public function AlterarPedido(Request $request){

      $pedido = Pedido::find($request->IdPedido);

      $pedido->AtividadeFisicaID = $request->AtividadeFisica;
      $pedido->Titulo = $request->Titulo;
      $pedido->Descricao = $request->Descricao;

      $pedido->save();
      return redirect()->back();
    }




    public function ApagarPedido($id){

      $pedido = Pedido::find($id);


      $pedido->delete();
      return redirect()->back();
    }
}
