@extends('master.base')

@section('pagina')
Pedidos
@endsection

@section('conteudo')

<h1>Todos os Pedidos dos clientes</h1>

<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif

@foreach ($pedidos as $pedido )
<div class="card text-center mt-4 border-secondary mb-3">
  <div class="card-header">
    Pedido Feito por: <b>{{$pedido->Usuarios()->first()->name}}</b> <br> Procurando Personal Trainer de: <b>{{$pedido->AtividadeDoPedido()->first()->AtividadeFisica}}</b>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$pedido->Titulo}}</h5>
    <p class="card-text">{{$pedido->Descricao}}</p>


  <!-- Então, vejo se esse personal é candidato desse pedido. Mas como pode haver vários candidatos
  então preciso procurar dentro do array  ate encontrar. Caso no encotre o personal não é candidato do pedido
-->

      @forelse($pedido->Candidatos()->get() as $candidato)

          @if($candidato->PersonalID === Auth::guard('PersonalTrainer')->user()->id)

          <a class="btn btn-warning">Você já é candidato, agora resta apenas o cliente aceitar</a>
          @break

          @elseif($loop->last)
              <a href="{{route('Candidato',['IdPedido'=> $pedido->id,'IdPersonal'=> Auth::guard('PersonalTrainer')->user()->id])}}" class="btn btn-warning">Candidatar-se</a>
          @endif

      <!-- Caso esteja vazio, então não existe candidato para o pedido -->
      @empty
     <!-- libero o link para ele poder se candidatar -->
      <a href="{{route('Candidato',['IdPedido'=> $pedido->id,'IdPersonal'=> Auth::guard('PersonalTrainer')->user()->id])}}" class="btn btn-warning">Candidatar-se</a>
      @endforelse

  </div>
  <div class="card-footer text-muted">
    Realizado em {{$pedido->created_at}}
  </div>
</div>

@endforeach

@endsection
