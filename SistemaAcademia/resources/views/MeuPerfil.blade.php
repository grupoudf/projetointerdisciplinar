@extends('master.base')

@section('pagina')
Perfil
@endsection

@section('conteudo')
<h1>Meu perfil</h1>
<form action='{{route('AlterarUsuario')}}' method='post' id='form'>
    @csrf
        <table class='TablePerfil table'>
            <tr>
            <td>Nome:</td><td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
            <td>Email:</td><td>{{Auth::user()->email}}'</td>
            </tr>
            <tr>
            <td>Senha:</td><td>********</td>
            </tr>
        </table>
        <input type="hidden" value="{{Auth::user()->id}}">
        <button type='button' class='btn btn-sm btn-outline-warning' onclick='Alterar()'>Alterar</button>
</form>
    <script>
     function Alterar(){
      var x = document.getElementById("form");
      x.innerHTML="<form action='{{route('AlterarUsuario')}}' method='post' id='form'>@csrf<table class='TablePerfil table'><tr><td>Nome:</td><td><input type='text' name='nome' value='{{Auth::user()->name}}'></td></tr><tr><td>Email:</td><td><input type='text' nome = 'email' value='{{Auth::user()->email}}'></td></tr><tr><td>Senha:</td><td>********</td></tr></table><button type='submit' class='btn btn-sm btn-outline-warning'>Salvar</button></form>"
     }
    </script>
</div>

@endsection