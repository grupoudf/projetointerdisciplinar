@extends('master.base')

@section('pagina')
Pedido
@endsection

@section('conteudo')
<h1>Procura um Personal Trainer? Faça um pedido!</h1>

@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
<form action="{{route('CriarPedido')}}" method="post">
  @csrf
  <div class="form-group">

  <div class="row">

    <div class="col">
      <label for="titulo" class="mt-3">Adicione um titulo para sua solicitação</label>
      <input class="form-control form-control-lg" type="text" placeholder="Título" id="titulo" name="Titulo">
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

  <input type='hidden' name="UserID" value="{{Auth::user()->id}}">
  <textarea class="form-control mt-3" rows="10" placeholder="Adicione uma descrição" name="Descricao"></textarea>

  </div>

  <div class="row">

    <div class="col">
     <a href="{{route('home')}}" type="button"class="btn btn-outline-warning btn-lg btn-block">Descartar</a>
    </div>

    <div class="col">
    <button type="submit" class="btn btn-warning btn-lg btn-block">Publicar Pedido</button>
    </div>

  </div>
</form>
@endsection
