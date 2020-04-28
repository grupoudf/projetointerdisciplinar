<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.A||@yield('pagina')</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
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
        <li class="nav-item {{(Route::current()->getName()=== 'home' ? 'active':'')}}">
          <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item {{(Route::current()->getName()=== 'Cliente' ? 'active':'')}}">
          <a class="nav-link" href="{{route('Cliente')}}">Cadastro Cliente</a>
          </li>
          <li class="nav-item {{(Route::current()->getName()=== 'Personal' ? 'active':'')}}">
          <a class="nav-link" href="{{route('Personal')}}">Cadastro Personal</a>
          </li>
        </ul>
        <a class="btn btn-sm btn-outline-secondary" href="#">Pedido</a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Login</a>
      </div>
    </nav>
  </header>

<div class="container py-5">
@yield('conteudo')
</div>

    


<script>src="{{asset('jquery.js')}}"</script>
<script>src="{{asset('bootstrap.js')}}"</script>

</body>
</html>