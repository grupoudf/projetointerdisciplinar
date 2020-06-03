<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Notifications\Cliente;


class UserController extends Controller
{
    public function Cadastro(){

      return view('CadastroUsuario');
    }


    public function Cadastrar(Request $request){
       $usuario = new User();

       $usuario->name = $request->nome;
       $usuario->email = $request->email;
       $usuario->password = Hash::make($request->senha);
       $usuario->sexo = $request->Sexo;
       $usuario->nascimento = $request->Nascimento;
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

      // Recuperando dados do usuario que irá ser modificado
      $usuario = User::find($request->id);

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


      if(isset($request->Telefone)){

         $usuario->telefone = $request->Telefone;
         $usuario->save();

         return redirect()->back()->withSuccess('Telefone alterado com sucesso');
      }
    }

    public function ApagarConta($id){

      $usuario = User::find($id);

      $usuario->delete();

      return redirect()->route('home');
    }
}
