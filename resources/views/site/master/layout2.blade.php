<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>RF - Financeiro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8001/style.css">
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <a href="/" class="navbar-brand">
          <img src="{{ asset('./imagens/logorf.jpeg') }}" alt=" ">
      </a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.home')}}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.cadastro')}}">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('site.contato')}}">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main role="main">

@yield('content')

  <!-- FOOTER -->
  <footer class="container">
    <hr class="featurette-divider">
    <p class="float-right"><a href="#"><ion-icon name="arrow-up-outline"></ion-icon></a></p>
    <p>&copy; {{date("Y")}} RF Financeiro &middot; <a href="{{route('site.home')}}">Home</a> &middot;</p>
  </footer>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
<script  nomodule  src = "https: // unpkg .com / ionicons @ 5.5.2 / dist / ionicons / ionicons.js "> </script>
</body>
</html>