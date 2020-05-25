@extends('master.base')

@section('pagina')
Pedidos
@endsection

@section('conteudo')
<h1>Meus Pedidos</h1>


@foreach ($pedidos as $pedido )

<div class="card text-center mt-4 border-secondary mb-3">
  <div class="card-header">
    Pedido Feito por: <b>{{$usuario->name}}</b> <br> Procurando Personal Trainer de: <b>{{$pedido->AtividadeDoPedido()->first()->AtividadeFisica}}</b>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$pedido->Titulo}}</h5>
    <p class="card-text">{{$pedido->Descricao}}</p>
    <a href="#" class="btn btn-outline-warning">Excluir</a>
    <a href="#" class="btn btn-warning">Editar</a>
  </div>
  <div class="card-footer text-muted">
    Realizado em {{$pedido->created_at}}
  </div>
</div>
<hr></hr>
@endforeach
@endsection
