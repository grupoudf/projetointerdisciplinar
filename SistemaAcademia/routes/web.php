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

// Rotas que levam ao controllers
Route::get('VerPedidoPersonal','PedidoController@VerPedidoPersonal')->name('VerPedidoPersonal');

Route::get('ApagarPedido/{id}','PedidoController@ApagarPedido')->name('ApagarPedido');

Route::get('ApagarContaCliente/{id}','UserController@ApagarConta')->name('ApagarContaCliente');

Route::post('AlterarPedido','PedidoController@AlterarPedido')->name('AlterarPedido');

Route::get('VerPedidosUsuarioLogado/{id}','PedidoController@VerPedidosUsuarioLogado')->name('VerPedidosUsuarioLogado');

Route::get('FormCriarPedido','PedidoController@FormCriarPedido')->name('FormCriarPedido');

Route::get('CadastroUsuario','UserController@Cadastro')->name('CadastroUsuario');

Route::get('CadastroPersonal','PersonalTrainerController@Cadastro')->name('CadastroPersonal');

Route::get('MeuPerfilCliente/{id}','UserController@ExibirPorID')->name('MeuPerfilCliente');

Route::get('MeuPerfilPersonal/{id}','PersonalTrainerController@ExibirPorID')->name('MeuPerfilPersonal');

Route::post('AlterarUsuario','UserController@EditarDados')->name('AlterarUsuario');

Route::post('AlterarPersonal','PersonalTrainerController@EditarDados')->name('AlterarPersonal');

Route::post('CadastrarUsuario','UserController@Cadastrar')->name('CadastrarUsuario');

Route::post('CadastrarPersonal','PersonalTrainerController@Cadastrar')->name('CadastrarPersonal');

Route::post('CriarPedido','PedidoController@CriarPedido')->name('CriarPedido');

// Auth
Auth::routes();

Route::get('admin','AuthController@dashboard')->name('admin');
//Mostrando tela de login
Route::get('loginn','AuthController@login')->name('loginn');
//Enviando informações para validar o login
Route::post('logar','AuthController@logar')->name('logar');
//Logout
Route::get('LogoutUser','AuthController@LogoutUser')->name('LogoutUser');

Route::get('LogoutPersonal','AuthController@LogoutPersonal')->name('LogoutPersonal');

//Route::get('/home', 'HomeController@index')->name('home');
