<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
    public function Cadastrar(Request $request){
       $usuario = new User();

       $usuario->name = $request->nome;
       $usuario->email = $request->email;
       $usuario->password = Hash::make($request->senha);
       $usuario->sexo = $request->Sexo;
       $usuario->nascimento = $request->Nascimento;
       $usuario->AtividadeFisica = $request->AtividadeFisica;
       $usuario->telefone = $request->Telefone;
       $usuario->save();

       return redirect()->route('loginn');
    }

    public function ExibirPorID($id){
        // Recuperando dados do usuario logado
        $usuario = User::find($id);
        //Enviado usuario encotrado como parâmentro para a view
        return view('MeuPerfilCliente',['usuario' => $usuario]);
    }

    public function EditarDados(Request $request){
      dd($request);
    }
}
