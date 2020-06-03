<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Pedido;
use App\User;

class ServicoController extends Controller
{
    public function CriarServico(Request $request){

     $servico = new Servico;
     $pedido = Pedido::find($request->PedidoID);

     //UserID
     //PersonalID
     //AtividadeFisicaID
     $servico->UserID = $request->UserID;
     $servico->PersonalID = $request->PersonalID;
     $servico->AtividadeFisicaID = $request->AtividadeFisicaID;

     $servico->save();
     $pedido->delete();

     return redirect()->route('home');
    }

    public function ExibirServicos($id){

      $cliente = User::find($id);

      return view('Servicos',['cliente'=>$cliente]);
    }
}
