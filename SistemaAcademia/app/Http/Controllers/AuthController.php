<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    //Mostrando tela de login
    public function login(){

      return view('loginn');
    }

    // Controller encarregado de logar os usuarios no sistema
    public function logar(Request $request){

      $credentials = [
          'email'=> $request->email,
          'password'=> $request->password
      ];

      //Logando Cliente
      if($request->login === "User"){

        if(Auth::attempt($credentials)){

        return redirect()->route('home');

        }
        return redirect()->back()->withInput()->withErrors("Os dados informados não conferem!");
      }

      //Logando como Personal Trainer
      if($request->login === "Personal"){

        if (Auth::guard('PersonalTrainer')->attempt($credentials)){

          return redirect()->route('home');
        }
        return redirect()->back()->withInput()->withErrors("Os dados informados não conferem!");
      }

    }
    // Logout de Cliente
    public function LogoutUser(){

        Auth::logout();
        return redirect()->route('home');
    }
    // Logout de Personal
    public function LogoutPersonal(){

       Auth::guard('PersonalTrainer')->Logout();
       return redirect()->route('home');
    }
}
