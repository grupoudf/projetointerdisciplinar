@extends('master.base')

@section('pagina')
Cadastro Personal Trainer
@endsection

@section('conteudo')
<h1>Cadastro de Personal Trainer</h1>

<form action="{{Route('Cadastrar')}}" method="POST">
@csrf
<div class="form-group card">

    <div class="row">

    <div class="col">
    <label for="nome">Nome: </label>
    <input type="text" name="Nome" class="form-control" id="nome" placeholder="Digite seu nome completo">

    <label for="cpf">CPF: </label>
    <input type="text" name="Cpf" class="form-control" id="cpf" placeholder="CPF">

    <label for="telefone">Telefone: </label>
    <input type="number" name="Telefone" class="form-control" id="telefone" placeholder="telefone">

   </div>

   <div class="col">

    <label for="Nascimento">Data de Nascimento</label>
    <input class="form-control" name="Nascimento" type="date" id="Nascimento" placeholder="Data de Nascimento">

    <legend>Sexo:</legend>
    <input type="radio" name="Sexo" id="Masculino" value="Masculino">
    <label for="Masculino">Masculino</label><br>

    <input type="radio" name="Sexo" id="Feminino" name="gender" value="Feminino">
    <label for="Feminino">Feminino</label><br>

    <input type="radio" name="Sexo" id="Outro" name="gender" value="Outro">
    <label for="Outro">Outro</label>
   </div>
   </div>

  <div class="row AtividadeFisica card">
    <div class="col">
        <label for="Atividade Fisica">Atividade fisica principal</label>
        <input class="form-control" name="AtividadeFisica" type="text" id="Atividade Fisica">
    </div>
  </div>
  
  <div>
    <label for="Senha">Digite uma senha</label>
    <input class="form-control" name="Senha" type="password" id="Senha" placeholder="Senha">
  
    <label for="Email">Digite seu email</label>
    <input class="form-control" name="Email" type="email" id="Email" placeholder="Email">

    <button type="submit">Salvar</button>
  </div>
</form>
@endsection