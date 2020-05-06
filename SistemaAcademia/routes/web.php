<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('CadastroUsuario', function () {
    return view('CadastroUsuario');
})->name('CadastroUsuario');

Route::get('CadastroPersonal', function () {
    return view('CadastroPersonal');
})->name('CadastroPersonal');

// Rotas que levam ao controllers
Route::get('MeuPerfil','UserController@ExibirPorID')->name('MeuPerfil');

Route::post('AlterarUsuario','UserController@Alterar')->name('AlterarUsuario');

Route::post('CadastrarUsuario','UserController@Cadastrar')->name('CadastrarUsuario');

Route::post('CadastrarPersonal','PersonalTrainerController@Cadastrar')->name('CadastrarPersonal');
// Auth
Auth::routes();

Route::get('admin','AuthController@dashboard')->name('admin');
//Mostrando tela de login
Route::get('loginn','AuthController@login')->name('loginn');
//Enviando informações para validar o login
Route::post('logar','AuthController@logar')->name('logar');
//Logout
Route::get('logout','AuthController@logout')->name('logout');

//Route::get('/home', 'HomeController@index')->name('home');
