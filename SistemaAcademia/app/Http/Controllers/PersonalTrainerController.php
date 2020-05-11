<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\PersonalTrainer;

class PersonalTrainerController extends Controller
{
  public function Cadastrar(Request $request){
     $personal = new PersonalTrainer();

     $personal->name = $request->nome;
     $personal->email = $request->email;
     $personal->password = Hash::make($request->senha);
     $personal->sexo = $request->Sexo;
     $personal->nascimento = $request->Nascimento;
     $personal->AtividadeFisica = $request->AtividadeFisica;
     $personal->telefone = $request->Telefone;
     $personal->save();

     return redirect()->route('loginn');
  }

  public function ExibirPorID($id){
    // Recuperando dados do usuario logado
    $usuario = PersonalTrainer::find($id);
    //Enviado usuario encotrado como parâmentro para a view
    return view('MeuPerfilPersonal',['usuario' => $usuario]);
  }

  public function EditarDados(Request $request){
    // Recuperando dados do usuario que irá ser modificado
    $usuario = PersonalTrainer::find($request->id);

    // Se a variável existir
    if(isset($request->nome)){

       $usuario->name = $request->nome;
       $usuario->save();
       return redirect()->back();
    }

    if(isset($request->email)){

       $usuario->email = $request->email;
       $usuario->save();
       return redirect()->back();
    }

    if(isset($request->Sexo)){

       $usuario->sexo = $request->Sexo;
       $usuario->save();
       return redirect()->back();
    }

    if(isset($request->Nascimento)){

       $usuario->nascimento = $request->Nascimento;
       $usuario->save();
       return redirect()->back();
    }

    if(isset($request->AtividadeFisica)){

       $usuario->AtividadeFisica = $request->AtividadeFisica;
       $usuario->save();
       return redirect()->back();
    }

    if(isset($request->Telefone)){

       $usuario->telefone = $request->Telefone;
       $usuario->save();
       return redirect()->back();
    }
  }
}
