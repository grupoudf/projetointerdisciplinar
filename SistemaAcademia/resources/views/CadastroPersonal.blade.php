@extends('master.base')

@section('pagina')
Cadastro
@endsection

@section('conteudo')
<h1>Cadastro de Personal Trainer</h1>
<form action="{{route('CadastrarPersonal')}}" method="POST">
    @csrf
    <div class="form-group card p-3">

        <div class="row">
        <div class="col">
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
        <div class="col">
          <label for="cpf">CPF: </label>
          <input type="number" name="cpf" class="form-control" id="cpf" placeholder="CPF">
        </div>
        </div>


          <div class="row justify-content-center p-3">
          <div class="col-6">

          <div class="card p-3">
              <label for="Atividade Fisica">Qual atividade fisíca você está apto para ser Personal?</label>

              <select class="form-control" name="AtividadeFisica">

                @foreach ($atividades as $atividade)
                <option value="{{$atividade->id}}">{{$atividade->AtividadeFisica}}</option>
                @endforeach

              </select>
          </div>

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

        <div class="row justify-content-center">
        <div class="col mt-3">
        <button class="btn btn-dark" type="submit">Cadastrar</button>
        </div>
        </div>
    </form>
@endsection
