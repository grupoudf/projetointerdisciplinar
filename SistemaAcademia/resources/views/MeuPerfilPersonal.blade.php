@extends('master.base')

@section('pagina')
Perfil
@endsection

@section('conteudo')
<h1>Perfil</h1>

<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif

        <table class='TablePerfil table mt-4'>
            <tr>
            <td>Nome:</td><td>{{$usuario->name}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarNome">
              <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
              </svg>
            </button></td>
            </tr>
            <tr>
            <td>Email:</td><td>{{$usuario->email}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarEmail">
              <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
              </svg>
            </button></td>
            </tr>
            <tr>
            <td>Sexo:</td><td>{{$usuario->sexo}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarSexo">
              <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
              </svg>
            </button></td>
            </tr>
            <tr>
           <td>Data de nascimento:</td><td>{{$usuario->nascimento->format('d/m/Y')}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarData">
             <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
             <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
             <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
             </svg>
           </button></td>
            </tr>
            <tr>
              <td>Esporte Principal</td><td>{{$AtividadeDoPersonal->AtividadeFisica}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarAtividade">
                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                </svg>
              </button></td>
            </tr>
            <tr>
              <td>Telefone:</td><td>{{$usuario->telefone}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#AlterarTelefone">
                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                </svg>
              </button></td>
            </tr>
            <tr>
              <td>CPF: </td><td>{{$usuario->cpf}}</td><td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Alterarcpf">
                <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 00.5.5H4v.5a.5.5 0 00.5.5H5v.5a.5.5 0 00.5.5H6v-1.5a.5.5 0 00-.5-.5H5v-.5a.5.5 0 00-.5-.5H3z" clip-rule="evenodd"/>
                </svg>
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

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->name}}">

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

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

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="email">Email: </label>
        <input type="text" class="form-control" id="email" name="email" value="{{$usuario->email}}">

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

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

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
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

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

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
        <h5 class="modal-title" id="exampleModalLabel">Alterar data de nascimento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
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

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="Nascimento">Data de nascimento:</label>
        <input class="form-control" name="Nascimento" type="date" id="Nascimento">
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

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

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="telefone">Telefone: </label>
        <input type="number" name="Telefone" class="form-control" id="telefone" value="{{$usuario->telefone}}">
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

      </div>

      </form>
    </div>
  </div>
</div>


<!-- Modal CPF -->
<div class="modal fade" id="Alterarcpf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar cpf</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="cpf">CPF: </label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$usuario->cpf}}">

        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

      </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal Atividade Fisica-->
<div class="modal fade" id="AlterarAtividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Atividade Fisica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="form-group" action="{{route('AlterarPersonal')}}" method="post">
        @csrf
        <label for="Atividade Fisica">Atividade física principal</label>

        <select class="form-control" name="AtividadeFisica">

          @foreach ($atividades as $atividade)
          <option value="{{$atividade->id}}">{{$atividade->AtividadeFisica}}</option>
          @endforeach

        </select>
        <!-- Enviando id do usuário através de um input oculto -->
        <input type='hidden' name="id" value="{{$usuario->id}}">
      </div>

      <div class="modal-footer">

        <div class="container-fluid">

          <div class="row">

            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col">
               <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alteração</button>
            </div>

          </div>
        </div>

      </div>

      </form>
    </div>
  </div>
</div>
@endsection
