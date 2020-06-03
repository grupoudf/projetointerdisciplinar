<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\PersonalTrainer;
use App\AtividadesFisicas;

class PersonalTrainerController extends Controller
{
  public function Cadastro(){
    //Todas as atividades cadastradas no banco
    $atividades = AtividadesFisicas::all();

    return view('CadastroPersonal',['atividades'=> $atividades]);
  }


  public function Cadastrar(Request $request){
     $personal = new PersonalTrainer();

     $personal->name = $request->nome;
     $personal->email = $request->email;
     $personal->password = Hash::make($request->senha);
     $personal->sexo = $request->Sexo;
     $personal->nascimento = $request->Nascimento;
     $personal->AtividadeFisicaID = $request->AtividadeFisica;
     $personal->telefone = $request->Telefone;
     $personal->cpf = $request->cpf;
     $personal->save();

     return redirect()->route('loginn');
  }

  // Perfil do Personal
  public function ExibirPorID($id){

    // Recuperando dados do usuario logado
    $usuario = PersonalTrainer::find($id);
    // Pegando todas as atividades fisicas cadastradas no sistema para enviar para view
    $atividades = AtividadesFisicas::all();

    // Pegando o valor correspodente 'AtividadeFisicaID' na tabela atividades fisicas
    $AtividadeDoPersonal = $usuario->AtividadeDoPersonal()->first();

    //Enviado usuario e as atividades encotradas como parâmentro para a view
    return view('MeuPerfilPersonal',['usuario' => $usuario,'atividades'=> $atividades,'AtividadeDoPersonal'=> $AtividadeDoPersonal]);
  }

  public function EditarDados(Request $request){

    // Recuperando dados do usuario que irá ser modificado
    $usuario = PersonalTrainer::find($request->id);

    // Se a variável existir
    if(isset($request->nome)){

       $usuario->name = $request->nome;
       $usuario->save();

       return redirect()->back()->withSuccess('Nome alterado com sucesso');
    }

    if(isset($request->email)){

       $usuario->email = $request->email;
       $usuario->save();

       return redirect()->back()->withSuccess('Email alterado com sucesso');
    }

    if(isset($request->Sexo)){

       $usuario->sexo = $request->Sexo;
       $usuario->save();

       return redirect()->back()->withSuccess('Sexo alterado com sucesso');
    }

    if(isset($request->Nascimento)){

       $usuario->nascimento = $request->Nascimento;
       $usuario->save();

       return redirect()->back()->withSuccess('Nascimento alterado com sucesso');
    }

    if(isset($request->AtividadeFisica)){

       $usuario->AtividadeFisicaID = $request->AtividadeFisica;
       $usuario->save();

       return redirect()->back()->withSuccess('Atividade física alterado com sucesso');
    }

    if(isset($request->Telefone)){

       $usuario->telefone = $request->Telefone;
       $usuario->save();

       return redirect()->back()->withSuccess('Telefone alterado com sucesso');
    }

    if(isset($request->cpf)){

       $usuario->cpf = $request->cpf;
       $usuario->save();

      return redirect()->back()->withSuccess('CPF alterado com sucesso');
    }
  }
}
