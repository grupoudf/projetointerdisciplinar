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

Route::get('CadastroPersonalTrainer', function () {
    return view('CadastroPersonalTrainer');
})->name('Personal');

Route::get('CadastroCliente', function () {
    return view('CadastroCliente');
})->name('Cliente');


// Controllers
Route::post('CadastrarPersonal','PersonalTrainerController@Cadastrar')->name('CadastrarPersonal');

Route::post('CadastrarCliente','UserController@Cadastrar')->name('CadastrarCliente');

Route::get('TodosPersonais','PersonalTrainerController@ExibirTodos')->name('ExibirTodos');