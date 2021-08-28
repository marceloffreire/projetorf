@extends('site.master.layout')
@section('content')
<div class="conteiner py-0">
<div class="jumbotron">
    <div class="conteiner text-center">
  <h1 class="display-0">Entre em Contato</h1>
  <hr class="my-0">
  <p class="lead">Envie sua mensagem. Retornaremos em breve.</p>
  </div>


<form id="contato">
  <div class="form-group">
    <label for="exampleInputEmail1">Seu nome</label>
    <input type="email" class="form-control size-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu nome">
  </div>
  <label for="exampleInputEmail1">Seu email</label>
    <input type="email" class="form-control size-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
    <div class="form-group">
    <label for="exampleFormControlTextarea3">Sua mensagem</label>
    <textarea class="form-control size-input" id="exampleFormControlTextarea3" rows="3"></textarea>
  </div>
  <button type="enviar" class="btn btn-primary">enviar</button>
</form>
</div>
</div>
@endsection