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
}
