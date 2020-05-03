@extends('master.base')
@section('pagina')
Cadastro
@endsection

@section('conteudo')
<h1>Cadastro de Usuario</h1>
<form action="{{route('CadastrarUsuario')}}" method="POST">
    @csrf
    <div class="form-group card">
    
        <div class="row">
    
        <div class="col">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome completo">
    
        <label for="Senha">Digite uma senha</label>
        <input class="form-control" name="senha" type="password" id="Senha" placeholder="Senha">
      
        <label for="Email">Digite seu email</label>
        <input class="form-control" name="email" type="email" id="Email" placeholder="Email">
    
        <button type="submit">Salvar</button>
        </div>
      
    </form>
@endsection