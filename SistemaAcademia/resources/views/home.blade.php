@extends('master.base')

@section('pagina')
Home
@endsection

@section('conteudo')
<h1>Home</h1>

@if(Auth::check())
<h3>Bem vindo Cliente.</h3>

<!-- Mensagens de sucesso -->
@if(session('success'))
<div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif

@elseif((Auth::guard('PersonalTrainer')->check()))

<h3>Bem vindo Personal Trainer.</h3>

@else
<h3>Bem vindo visitante, crie um conta.</h3>
@endif
@endsection
