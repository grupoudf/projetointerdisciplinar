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

       $usuario->save();

       return redirect()->route('loginn');
    }

    public function ExibirPorID(){
        return view('MeuPerfil');
    }

    public function Alterar(Request $request){
      dd($request);
    }
}
