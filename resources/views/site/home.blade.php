@extends('site.master.layout')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('./imagens/cliente02.jpeg') }}" alt="aquela imagem ali">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>RF - Financeiro</h1>
            <p>Sistema para controle financeiro online.
                        Completo, fácil de usar e gratuito.</p>
            <p><a class="btn btn-lg btn-primary" href="{{route('site.cadastro')}}" role="button">Comece Já!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item carsouel-1">
        <img src="{{ asset('./imagens/cliente0101.jpeg') }}" alt="aquela imagem ali">
        <div class="container">
          <div class="carousel-caption">
            <h1>Você no controle.</h1>
            <p>Controle financeiro completo pra você e sua família.</p>
            <p><a class="btn btn-lg btn-primary" href="{{route('site.cadastro')}}" role="button">Cadastre-se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#8ff852"/></svg> -->
        <img src="{{ asset('./imagens/cliente03.jpg') }}" alt="aquela imagem ali">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Tempo é dinheiro</h1>
            <p>No RF você controla sua grana diariamente em segundos e não perde tempo. Tenha tudo sob controle e aproveite seu tempo com o que realmente importa pra você!</p>
            <p><a class="btn btn-lg btn-primary" href="{{route('site.cadastro')}}" role="button">Venha você também!</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- tres colounas de texto abixo do carrosel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="{{ asset('./imagens/client-1.png') }}" alt="aquela imagem ali" class="bd-placeholder-img rounded-circle" width="140" height="140" >
    
        <h3>Camila</h3>
        <p>Amo o jeito como o RF apresenta as informações financeira da empresa e todos os seus indicadores de maneira muito visual e intuitiva.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ asset('./imagens/client-2.png') }}" alt="aquela imagem ali" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h3>Jéssica Honda</h3>
        <p>O RF nos permite ter tomada de decisões mais ágeis e segura, sem falar que nos ajuda a tornar as tarefas cotidianas mais simples.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="{{ asset('./imagens/client-3.png') }}" alt="aquela imagem ali" class="bd-placeholder-img rounded-circle" width="140" height="140">
        <h3>José Rodrigues</h3>
        <p>Utilizo RF por anos e recomendo para todos os meus clientes e alunos. É uma ferramenta muito fácil de usar que permite maior controle sobre seu fluxo de caixa, contas a pagar, receber, etc.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Interface intuitiva, fácil e acessível a qualquer hora e lugar</span>
        </h2>
        <p class="lead">Não nos preocupamos apenas em criar telas bonitas, mas também em como você irá interagir com elas, e como melhorar ao máximo sua experiência de uso, mantendo-o funcional e consistente.</p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('./imagens/facilidade.webp') }}" alt="aquela imagem ali" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Atende a todos, controle financeiro pessoal ou da sua empresa</span></h2>
        <p class="lead">Deixamos você personalizar o sistema a sua necessidade. Todos os recursos são ativados e inativados no sistema de acordo com as suas escolhas e necessidades.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset('./imagens/personalizavel.webp') }}" alt="aquela imagem ali" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Fique tranquilo, seus dados estarão seguros</span></h2>
        <p class="lead">Toda informação trocada entre o seu navegador e o RF - Financeiro é feita através de um canal criptografado. Além disso, os dados são armazenados em nuvem.</p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('./imagens/seguranca2.jpg') }}" alt="aquela imagem ali" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection