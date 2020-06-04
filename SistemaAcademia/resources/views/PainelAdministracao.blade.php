@extends('master.base')

@section('pagina')
Serviço
@endsection

@section('conteudo')
<h1>Painel de Administração</h1>
<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
<div class="row mt-4">

  <div class="col">
    <table class="table table-bordered">
      <h4>Todos os clientes</h4>
      <tr>
          <th>Id</th><th>Nome</th><th>Privilégios</th><th>Ações</th>
      </tr>

    @forelse($clientes as $cliente)
    <tr>
      <td>{{$cliente->id}}</td><td>{{$cliente->name}}</td><td>{{$cliente->TipoUsuario()->first()->TipoUsuario}}</td><td><button data-toggle="modal" data-target="#cliente{{$cliente->id}}" class="btn btn-warning">Detalhes</button></td>
    </tr>


    <!-- Modal detalhes do cliente -->
    <div class="modal fade" id="cliente{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">

            <h4>Dados do Cliente</h4>
            <div class="row">
              <div class="col">
                Nome:
              </div>

              <div class="col">
                {{$cliente->name}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Privilégios
              </div>
              <div class="col">
                {{$cliente->TipoUsuario()->first()->TipoUsuario}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Telefone:
              </div>

              <div class="col">
                  {{$cliente->telefone}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Email:
              </div>

              <div class="col">
                  {{$cliente->email}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Sexo:
              </div>

              <div class="col">
                  {{$cliente->sexo}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Nascimento:
              </div>

              <div class="col">
                {{$cliente->nascimento}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Criado em:
              </div>
              <div class="col">
                {{$cliente->created_at}}
              </div>
            </div>

            <div class="row">
              <div class="col">
                Atualizado em:
              </div>
              <div class="col">
                  {{$cliente->updated_at}}
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{route('ExcluirCliente',['id'=>$cliente->id])}}" type="submit" class="btn btn-warning">Excluir</a>
            <a href="{{route('PromoverCliente',['id'=>$cliente->id])}}" class="btn btn-primary">Promover para adminstrador</a>
          </div>
        </div>
      </div>
    </div>


    @empty
    <h4>O sistema não possui clientes cadastrados</h4>
    @endforelse
    </table>
    </div>


  <div class="col">
    <table class="table table table-bordered">
      <h4>Todos os Personais Trainers</h3>
        <tr>
            <th>Id</th><th>Nome</th><th>Privilégios</th><th>Ações</th>
        </tr>
    @forelse($personais as $personal)
        <tr>
          <td>{{$personal->id}}</td><td>{{$personal->name}}</td><td>{{$personal->TipoUsuario()->first()->TipoUsuario}}</td><td><button data-toggle="modal" data-target="#personal{{$personal->id}}" class="btn btn-warning">Detalhes</button></td>
        </tr>


        <!-- Modal detalhes do personal-->
        <div class="modal fade" id="personal{{$personal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <div class="modal-body">

                <h4>Dados do Personal</h4>
                <div class="row">
                  <div class="col">
                    Nome:
                  </div>

                  <div class="col">
                    {{$personal->name}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Privilégios
                  </div>
                  <div class="col">
                    {{$personal->TipoUsuario()->first()->TipoUsuario}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Telefone:
                  </div>

                  <div class="col">
                      {{$personal->telefone}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Email:
                  </div>

                  <div class="col">
                      {{$personal->email}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Sexo:
                  </div>

                  <div class="col">
                      {{$personal->sexo}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Nascimento:
                  </div>

                  <div class="col">
                    {{$personal->nascimento}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Criado em:
                  </div>
                  <div class="col">
                    {{$personal->created_at}}
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    Atualizado em:
                  </div>
                  <div class="col">
                      {{$personal->updated_at}}
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="{{route('ExcluirPersonal',['id'=>$personal->id])}}" type="button" class="btn btn-secondary" >Excluir</a>
                <a href="{{route('PromoverPersonal',['id'=>$personal->id])}}" type="button" class="btn btn-primary">Promover para administrador</a>
              </div>
            </div>
          </div>
        </div>
  @empty
  <h4>O sistema não possui personais cadastrados</h4>
  @endforelse
</table>
</div>



<div class="col">

  <table class="table table table-bordered">
    <h4>Todas as atividades físicas</h4>
    <tr>
        <th>Id</th><th>Atividade Fisica</th><th>Ações</th>
    </tr>
@forelse($atividades as $atividade)
<tr>
  <td>{{$atividade->id}}</td><td>{{$atividade->AtividadeFisica}}</td><td><a href="{{route('ExcluirAtividade',['id'=>$atividade->id])}}"class="btn btn-warning">Excluir</a></td>
</tr>

@empty
<h4>O sistema não possui Atividades fisicas cadastradas</h4>
@endforelse
</table>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#atividade">Cadastrar atividade</button>


<!-- Modal detalhes da Atividade Fisica-->
<div class="modal fade" id="atividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de atividade fisíca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

      <form action="{{route('CadastrarAtividade')}}" method="post">
        @csrf
        <div class="row">

          <div class="col form-group">
            <label for="atividade">Atividade Fisica</label>
            <input  class="form-control" type="text" name="atividade" id="atividade">
          </div>

        </div>

        <div class="row">

          <div class="col">
          <button type="submit" class="btn btn-warning">Cadastrar</button>
          </div>

        </div>

      </form>

      </div>
</div>
</div>




@endsection
