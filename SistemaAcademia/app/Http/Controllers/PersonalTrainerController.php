<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalTrainer;

class PersonalTrainerController extends Controller
{

    public function Cadastrar(Request $request){
        
        $personaltrainer = new PersonalTrainer();

        $personaltrainer->name = $request->Nome;
        $personaltrainer->email = $request->Email;
        $personaltrainer->AtividadeFisica = $request->AtividadeFisica;
        $personaltrainer->password = $request->Senha;
        $personaltrainer->cpf = $request->Cpf;
        $personaltrainer->telefone = $request->Telefone;
        $personaltrainer->sexo = $request->Sexo;
        $personaltrainer->nascimento = $request->Nascimento;
        $personaltrainer->save();

        return view('home');
    }

    public function ExibirTodos(){
        $personaltrainers = PersonalTrainer::all();
        
        return view('TodosPersonais',['personais'=> $personaltrainers]);
    }

    public function ExibirUm(){
        
    }

    public function Atualizar(){

    }
    
    public function Deletar(){

    }
}
