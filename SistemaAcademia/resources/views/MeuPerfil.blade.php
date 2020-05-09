@extends('master.base')

@section('pagina')
Perfil
@endsection

@section('conteudo')
<h1>Meu perfil</h1>
<form action='{{route('AlterarUsuario')}}' method='post' class="py-5">
    @csrf
        <table class='TablePerfil table'>
            <tr>
            <td>Nome:</td><td>{{$usuario->name}}</td>
            </tr>
            <tr>
            <td>Email:</td><td>{{$usuario->email}}</td>
            </tr>
            <tr>
            <td>Sexo:</td><td>{{$usuario->sexo}}</td>
            </tr>
            <tr>
           <td>Data de nascimento:</td><td>{{$usuario->nascimento}}</td>
            </tr>
            <tr>
              <td>Esporte Principal</td><td>{{$usuario->AtividadeFisica}}</td>
            </tr>
            <tr>
              <td>Telefone:</td><td>{{$usuario->telefone}}</td>
            </tr>
        </table>
        <input type="hidden">
        <button type='button' class='btn btn-sm btn-outline-warning' onclick='Alterar()'>Alterar</button>
</form>
</div>

@endsection
