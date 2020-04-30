<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function Cadastrar(Request $request){

        $Cliente = new User();

        $Cliente->name = $request->Nome;
        $Cliente->email = $request->Email;
        $Cliente->AtividadeFisica = $request->AtividadeFisica;
        $Cliente->password = $request->Senha;
        $Cliente->cpf = $request->Cpf;
        $Cliente->telefone = $request->Telefone;
        $Cliente->sexo = $request->Sexo;
        $Cliente->nascimento = $request->Nascimento;
        $Cliente->save();

        return view('home');

    }

    public function Exibir(){

    }

    public function Atualizar(){

    }
    
    public function Deletar(){

    }
}
