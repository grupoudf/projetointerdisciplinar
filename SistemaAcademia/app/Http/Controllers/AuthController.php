<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){

        if(Auth::check()){
           return view('dashboard');
        }
        // Caso não esteja logado
        return redirect()->route('loginn');
    }

    //Mostrando tela de login
    public function login(){
      return view('loginn');
    }

    // Logando os usuario no sistema
    public function logar(Request $request){

       $credentials = [
           'email'=> $request->email,
           'password'=> $request->password
       ];

       //Função do laravel para fazer o login
       if(Auth::attempt($credentials)){

       return redirect()->route('home');
       
       }
       return redirect()->back()->withInput()->withErrors("Os dados informados não conferem!");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
