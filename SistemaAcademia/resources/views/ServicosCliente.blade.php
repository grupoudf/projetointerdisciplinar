@extends('master.base')

@section('pagina')
Serviço
@endsection

@section('conteudo')
<h1>Seus serviços</h1>

<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif

@forelse($cliente->Servicos()->get() as $Servico)
<table class="table table-bordered table-hover mt-5">
  <caption>Clique no Personal Trainer para visualizar dados de contato</caption>
  <tr>
    <thead class="thead-dark" id="numeroservico">
    <th colspan="4">Serviço {{$Servico->id}}</th>
    </thead>
  </tr>
  <tr>
    <th>Cliente</th><th>Personal Trainer</th><th>Atívidade fisica</th><th>Data de criação</th>
  </tr>
  <tr>
    <td>{{$cliente->name}}</td><td><a href="" data-toggle="modal" data-target="#servico{{$Servico->id}}">{{$Servico->Personal()->first()->name}}</a></td><td>{{$Servico->AtividadeFisica()->first()->AtividadeFisica}}</td><td>{{$Servico->created_at}}</td>
  </tr>
  <tr>
    <td colspan="4" id="numeroservico" ><a href="{{route('ExcluirServico',['id'=>$Servico->id])}}" class="btn btn-warning">Cancelar serviço</a></td>
  </tr>
</table>




<!-- Dados do Personal Trainer -->
<div class="modal fade" id="servico{{$Servico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dados de contato do Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <th>
            Telefone
          </th>
          <th>Email</th>
          <tr>
            <td>{{$Servico->Personal()->first()->telefone}}</td><td>{{$Servico->Personal()->first()->email}}</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<hr></hr>

@empty
<h1>Você ainda não possui um serviço! Para ter um serviço é necessário fazer um <a href="{{route('FormCriarPedido')}}">pedido<a></h1>
@endforelse

@endsection
