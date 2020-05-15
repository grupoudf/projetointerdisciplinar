<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.A||@yield('pagina')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <style>

      input[type="button"]{
        display:none;
      }
      input[type="button"] + label{
        background: #ddd;
        padding: 5px 10px;
      }

      #cliente + label{
        margin:0;
        border-radius: 100px 0px 0px 100px;
        color: #30383d;
        padding: 5px 20px;
      }
      #personal + label{
        margin:0;
        border-radius: 0px 100px 100px 0px;
        color: #30383d;
        padding: 5px 20px;
      }
      #cliente:hover + label{
        background: #e0a923;
      }
      #personal:hover + label{
        background: #e0a923;
      }
    </style>
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Sistema Academia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

        </ul>

        @if(Auth::check())

        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-warning dropdown-toggle m-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Cliente:</b> {{Auth::user()->name}}
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="MeuPerfilCliente/{{Auth::user()->id}}">Meu Perfil</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('LogoutUser')}}">Sair</a>
          </div>
        </div>
       <a class="btn btn-sm btn-outline-warning px-md-5 m-1" href="#">Pedido</a>
        @elseif(Auth::guard('PersonalTrainer')->check())
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-warning dropdown-toggle m-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>Personal:</b> {{Auth::guard('PersonalTrainer')->user()->name}}
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="MeuPerfilPersonal/{{Auth::guard('PersonalTrainer')->user()->id}}">Meu Perfil</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('LogoutPersonal')}}">Sair</a>
          </div>
        </div>
        @else
        <a class="btn btn-sm btn-outline-warning px-md-5 m-1" href="{{route('loginn')}}">Login</a>

        <a href="{{route('CadastroUsuario')}}">
        <input type="button" id="cliente">
        <label for="cliente">Cadastro de Cliente</label>
        </a>

        <a href="{{route('CadastroPersonal')}}">
        <input type="button" id="personal">
        <label for="personal" >Cadastro de Personal</label>
        </a>
        @endif
       </div>
</div>
      </div>
    </nav>
  </header>

<div class="container mt-5">
<br>
@yield('conteudo')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
