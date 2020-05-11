@extends('master.base')

@section('pagina')
Perfil
@endsection

@section('conteudo')
<h1>Meu perfil</h1>
        <table class='TablePerfil table py-5'>
            <tr>
            <td>Nome:</td><td>{{$usuario->name}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarNome">
              Alterar
            </button></td>
            </tr>
            <tr>
            <td>Email:</td><td>{{$usuario->email}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarEmail">
              Alterar
            </button></td>
            </tr>
            <tr>
            <td>Sexo:</td><td>{{$usuario->sexo}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarSexo">
              Alterar
            </button></td>
            </tr>
            <tr>
           <td>Data de nascimento:</td><td>{{$usuario->nascimento}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarData">
             Alterar
           </button></td>
            </tr>
            <tr>
              <td>Esporte Principal</td><td>{{$usuario->AtividadeFisica}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarAtividadeFisica">
                Alterar
              </button></td>
            </tr>
            <tr>
              <td>Telefone:</td><td>{{$usuario->telefone}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarTelefone">
                Alterar
              </button></td>
            </tr>
            <tr>
              <td colspan="2"><button type='button' class='btn btn-danger'>Excluir Conta</button></td>
            </tr>
        </table>

<!-- Modal Nome -->
<div class="modal fade" id="AlterarNome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar nome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->name}}">

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Email -->
<div class="modal fade" id="AlterarEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <label for="email">Email: </label>
        <input type="text" class="form-control" id="email" name="email" value="{{$usuario->email}}">

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Sexo -->
<div class="modal fade" id="AlterarSexo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar sexo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <legend>Sexo:</legend>
        <input type="radio" name="Sexo" id="Masculino" value="Masculino">
        <label for="Masculino">Masculino</label><br>
        <input type="radio" name="Sexo" id="Feminino" value="Feminino">
        <label for="Feminino">Feminino</label><br>
        <input type="radio" name="Sexo" id="Outro" value="Outro">
        <label for="Outro">Outro</label>

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Data de nascimento -->
<div class="modal fade" id="AlterarData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar data de nascimento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <label for="Nascimento">Data de nascimento:</label>
        <input class="form-control" name="Nascimento" type="date" id="Nascimento">
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Atividade Física -->
<div class="modal fade" id="AlterarAtividadeFisica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar esporte principal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <label for="Atividade Fisica">Atividade física principal</label>
        <input class="form-control" name="AtividadeFisica" type="text" id="Atividade Fisica" value="{{$usuario->AtividadeFisica}}">
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Telefone -->
<div class="modal fade" id="AlterarTelefone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar telefone</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarUsuario')}}" method="post">
        @csrf
        <label for="telefone">Telefone: </label>
        <input type="number" name="Telefone" class="form-control" id="telefone" value="{{$usuario->telefone}}">
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar alteração</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
