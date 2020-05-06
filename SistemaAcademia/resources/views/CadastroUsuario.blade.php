@extends('master.base')

@section('pagina')
Cadastro
@endsection

@section('conteudo')
<h1>Cadastro de Cliente</h1>
<form action="{{route('CadastrarUsuario')}}" method="POST">
    @csrf
    <div class="form-group card">

        <div class="row">

        <div class="col-sm">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome completo">
        </div>
        <div class="col">
            <legend>Sexo:</legend>
            <input type="radio" name="Sexo" id="Masculino" value="Masculino">
            <label for="Masculino">Masculino</label><br>
            <input type="radio" name="Sexo" id="Feminino" value="Feminino">
            <label for="Feminino">Feminino</label><br>
            <input type="radio" name="Sexo" id="Outro" value="Outro">
            <label for="Outro">Outro</label>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <label for="Nascimento">Data de Nascimento:</label>
        <input class="form-control" name="Nascimento" type="date" id="Nascimento" placeholder="Data de Nascimento">
        </div>
        <div class="col">

            <label for="telefone">Telefone: </label>
            <input type="number" name="Telefone" class="form-control" id="telefone" placeholder="telefone">
        </div>
        </div>
        <div class="row">
        <div class="col">
        <label for="Atividade Fisica">Atividade física principal</label>
        <input class="form-control" name="AtividadeFisica" type="text" id="Atividade Fisica">
        </div>
        </div>
        <div class="row">
        <div class="col">
            <label for="Email">Email:</label>
            <input class="form-control" name="email" type="email" id="Email" placeholder="Email">
        </div>
        <div class="col">
            <label for="Senha">Senha:</label>
            <input class="form-control" name="senha" type="password" id="Senha" placeholder="Senha">
        </div>
        </div>

        <div class="row">
        <div class="col">
        <button class="btn btn-dark" type="submit">Cadastrar</button>
        </div>
        </div>
    </form>
@endsection
