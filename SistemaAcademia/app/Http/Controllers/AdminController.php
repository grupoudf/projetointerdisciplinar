<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalTrainer;
use App\AtividadesFisicas;
use App\User;

class AdminController extends Controller
{
    public function PainelAdministracao(){



          $atividades = AtividadesFisicas::all();
          $personais = PersonalTrainer::all();
          $clientes = User::all();

          return view('PainelAdministracao',['atividades'=>$atividades,'personais'=>$personais,'clientes'=>$clientes]);

          // Caso não esteja logado
          return redirect()->route('loginn');
        }


    public function CadastrarAtividadeFisica(Request $request){

      $atividade = new AtividadesFisicas();
      $atividade->AtividadeFisica = $request->atividade;

      $atividade->save();

      return redirect()->back()->withSuccess('Atividade Fisica cadastrada com sucesso');
    }


    public function ExcluirAtividade($id){

      $atividade = AtividadesFisicas::find($id);
      $atividade->delete();

      return redirect()->back()->withSuccess('Atividade Fisica deletada com sucesso');
    }

    public function ExcluirCliente($id){

      $cliente = User::find($id);
      $cliente->delete();

      return redirect()->back()->withSuccess('Cliente deletado com sucesso');
    }

    public function ExcluirPersonal($id){

      $personal = PersonalTrainer::find($id);
      $personal->delete();

      return redirect()->back()->withSuccess('Personal deletado com sucesso');
    }

    public function PromoverCliente($id){

      $cliente = User::find($id);
      $cliente->privilegios = 2;

      $cliente->save();

      return redirect()->back()->withSuccess('Cliente promovido com sucesso');
    }

    public function PromoverPersonal($id){

      $personal = PersonalTrainer::find($id);
      $personal->privilegios = 2;

      $personal->save();

      return redirect()->back()->withSuccess('Personal promovido com sucesso');
    }
}
