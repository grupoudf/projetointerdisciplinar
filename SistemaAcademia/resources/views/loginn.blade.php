
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Sistema Academia</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('login.css')}}">

  </head>
  <body>
  <form class="form-signin" method='post' action="{{route('logar')}}">
    @csrf
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Sistema Academia</h1>
  </div>
  @if($errors->all())
    @foreach ($errors->all() as $erro)
    <div class="alert alert-danger" role="alert">
      {{$erro}}
    </div>
    @endforeach
    @endif
  <div class="form-label-group">
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Senha</label>
  </div>

  <div class="row">
    <div class="col">
      <input type="radio" name="login" id="login" value="Personal">
      <label for="login">Logar como Personal</label><br>
    </div>
    <div class="col">
      <input type="radio" name="login" id="login" value="User" checked>
      <label for="login">Logar como Cliente</label><br>
    </div>
  </div>
  <div class="checkbox mb-3">
      <div class="row">
        <div class="col">
          <label>
            <input type="checkbox" value="remember-me"> Lembre me
          </label>
        </div>
      </div>
    </div>
  <p>Não possui conta? Cadastre-se como <a href="{{route('CadastroPersonal')}}">Personal Trainer<a/> ou <a href="{{route('CadastroUsuario')}}">Cliente<a/>.</p>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy;2020</p>
</form>
</body>
</html>
