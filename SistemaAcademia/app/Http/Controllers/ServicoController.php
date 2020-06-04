<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;
use App\Pedido;
use App\User;
use App\PersonalTrainer;

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

     return redirect()->route('home')->withSuccess('Serviço criado com sucesso!');
    }

    public function ExibirServicosCliente($id){

      $cliente = User::find($id);

      return view('ServicosCliente',['cliente'=>$cliente]);
    }

    public function ExibirServicosPersonal($id){

      $personal = PersonalTrainer::find($id);

      return view('ServicosPersonal',['personal'=>$personal]);
    }

    public function ExcluirServico($id){

      $servico = Servico::find($id);
      $servico->delete();

      return redirect()->back()->withSuccess('Serviço deletado com sucesso!');
    }
}
