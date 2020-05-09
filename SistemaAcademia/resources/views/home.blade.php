@extends('master.base')

@section('pagina')
Home
@endsection

@section('conteudo')
<h1>Home</h1>

@if(Auth::check())
<h3>Bem vindo Cliente: {{Auth::user()->name}} </h3>


@elseif((Auth::guard('PersonalTrainer')->check()))
<h3>Bem vindo Persoanl Trainer: {{Auth::guard('PersonalTrainer')->user()->name}} </h3>
@endif
@endsection
