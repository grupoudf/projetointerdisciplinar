@extends('master.base')

@section('pagina')
Todos os Personais
@endsection

@section('conteudo')
<h1>Todos os Personais Trainers</h1>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Tipo Usuario</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Principal Atividade Física</th>
        <th>email verificado em</th>
        <th>Senha</th>
        <th>Remember Token</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Sexo</th>
        <th>Data de nascimento</th>
        <th>Criado em</th>
        <th>Atualizado em</th>
    </tr>
    
    <tr>
    @foreach ($personais as $personal)
    <td>{{$personal->id}}</td>
    <td>{{$personal->TipoUsuario}}</td>
    <td>{{$personal->name}}</td>
    <td>{{$personal->email}}</td>
    <td>{{$personal->AtividadeFisica}}</td>
    <td>{{$personal->email_verified_at}}</td>
    <td>{{$personal->password}}</td>
    <td>{{$personal->remember_token}}</td>
    <td>{{$personal->cpf}}</td>
    <td>{{$personal->telefone}}</td>
    <td>{{$personal->sexo}}</td>
    <td>{{$personal->nascimento}}</td>
    <td>{{$personal->created_at}}</td>
    <td>{{$personal->updated_at}}</td>
    </tr>
    @endforeach
</table>
@endsection
