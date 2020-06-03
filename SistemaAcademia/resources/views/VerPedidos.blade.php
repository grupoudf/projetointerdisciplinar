@extends('master.base')

@section('pagina')
Pedidos
@endsection

@section('conteudo')
<h1>Meus Pedidos</h1>

@if($pedidos->count()>0)

<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif


@foreach ($pedidos as $pedido )

<div class="card text-center mt-4 border-secondary mb-3">
  <div class="card-header">
    Pedido Feito por: <b>{{$usuario->name}}</b> <br> Procurando Personal Trainer de: <b>{{$pedido->AtividadeDoPedido()->first()->AtividadeFisica}}</b>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$pedido->Titulo}}</h5>
    <p class="card-text">{{$pedido->Descricao}}</p>

    <a href="{{route('ApagarPedido',['id'=>$pedido->id])}}" class="btn btn-outline-warning">Excluir</a>

    <!-- Botão que aciona o modal de editar -->
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal{{$pedido->id}}">
      Editar
    </button>
   <!-- Aqui eu verifico se o pedido possui candidatos -->
   @if($pedido->Candidatos()->get()->count()>0)
    <p class="my-1" id="MensagemPedido">Você possui {{$pedido->Candidatos()->get()->count()}} candidato(s) para esse Pedido. <a type='button'  data-toggle="modal" data-target="#modalcandidato{{$pedido->id}}"><b>Clique aqui</b></a> para visualizar.</p>
   @endif
  </div>

  <div class="card-footer text-muted">
    Realizado em {{$pedido->created_at}}
  </div>
</div>

<!-- Modal de ver candidatos -->

<div class="modal fade bd-example-modal-lg" id="modalcandidato{{$pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Candidato(s) ao seu pedido:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="MensagemPedido">Atenção, recomendamos que entre em contato com o personal trainer antes de aceitar o pedido.</p>
        <hr></hr>
    <!-- Relacionameno em cima de relacionamento -->
    @foreach($pedido->Candidatos()->get()  as $candidato)
      <table class="table table-hover">
        <tr>
          <thead class="thead-dark">
          <th class="col">Nome</th><th class="col">Email</th><th class="col">Telefone</th> <th colspan="2" id="acoes">Ações</th>
          </thead>
        </tr>
        <tr>
          <form action="{{route('CriarServico')}}" method="post">
            @csrf
            <td>{{$candidato->Personal()->first()->name}}</td>
            <td>{{$candidato->Personal()->first()->email}}</td>
            <td>{{$candidato->Personal()->first()->telefone}}</td>

            <!-- Enviando todos os dados na surdina  com inputs ocultos -->
            <input type="hidden" name="PersonalID" value="{{$candidato->Personal()->first()->id}}">
            <input type="hidden" name="UserID" value="{{Auth::user()->id}}">
            <input type="hidden" name="AtividadeFisicaID" value="{{$pedido->AtividadeDoPedido()->first()->id}}">
            <input type="hidden" name="PedidoID" value="{{$pedido->id}}">

            <td><button type="submit" class="btn btn-warning">Aceitar</button></td>
          </form>
        </tr>
      </table>
      <br>
    @endforeach

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal de editar-->
<div class="modal fade bd-example-modal-lg" id="modal{{$pedido->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('AlterarPedido')}}" method="post">
          @csrf
          <div class="form-group">

          <div class="row">

            <div class="col">
              <label for="titulo" class="mt-3">Adicione um titulo para sua solicitação</label>
              <input class="form-control form-control-lg" type="text" placeholder="Título" id="titulo" name="Titulo" value="{{$pedido->Titulo}}">
            </div>

            <div class="col">
             <label for="atividade" class="mt-3">Qual atividade fisica você procura um personal?</label>
              <select class="form-control form-control-lg" name="AtividadeFisica" id="atividade">

                @foreach ($atividades as $atividade)
                <option value="{{$atividade->id}}">{{$atividade->AtividadeFisica}}</option>
                @endforeach

              </select>

            </div>

          </div>
          <input type='hidden' name="IdPedido" value="{{$pedido->id}}">
          <textarea class="form-control mt-3" rows="10" placeholder="Adicione uma descrição" name="Descricao">{{$pedido->Descricao}}</textarea>

          </div>


      </div>
      <div class="modal-footer">

            <div class="container-fluid">
              <div class="row">

                <div class="col">
                    <button type="button" class="btn btn-outline-warning btn-lg btn-block" data-dismiss="modal">Descartar</button>
                </div>

                <div class="col">
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Salvar alterações</button>
                </div>
           </form>
              </div>

            </div>

        </div>
      </div>
    </div>
  </div>
@endforeach


@else
<h2>Você ainda não realizou nenhum pedido, faça um <a href="{{route('FormCriarPedido')}}">pedido</a></h2>

@endif

@endsection
