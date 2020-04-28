@extends('master.base')

@section('pagina')
Cadastro Personal Trainer
@endsection

@section('conteudo')
<h1>Cadastro de Personal Trainer</h1>

<form action="" method="post">
@csrf
<div class="form-group card">

    <div class="row">

    <div class="col">
    <label for="nome">Nome: </label>
    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">

    <label for="cpf">CPF: </label>
    <input type="text" class="form-control" id="cpf" placeholder="CPF">

    <label for="telefone">Telefone: </label>
    <input type="number" class="form-control" id="telefone" placeholder="telefone">

   </div>

   <div class="col">

    <label for="Nascimento">Data de Nascimento</label>
    <input class="form-control" type="date" id="Nascimento" placeholder="Data de Nascimento">

    <legend>Sexo:</legend>
    <input type="radio" id="Masculino" name="gender" value="Masculino">
    <label for="Masculino">Masculino</label><br>
    <input type="radio" id="Feminino" name="gender" value="Feminino">
    <label for="Feminino">Feminino</label><br>
    <input type="radio" id="Outro" name="gender" value="Outro">
    <label for="Outro">Outro</label>
   </div>
   </div>

  <div class="row AtividadeFisica card">
    <div class="col">
        <label for="Atividade Fisica">Ativida Fisica</label>
        <input class="form-control" type="text" id="Atividade Fisica" placeholder="Atividade fisica principal">
    </div>
  </div>
  
  <div>
    <label for="Senha">Digite uma senha</label>
    <input class="form-control" type="password" id="Senha" placeholder="Senha">
  
    <label for="Email">Digite seu email</label>
    <input class="form-control" type="email" id="Email" placeholder="Email">
  </div>
</form>
@endsection