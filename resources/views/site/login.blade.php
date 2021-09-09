@extends('site.master.layout')
@section('content')
<div class="conteiner py-0">
<div class="jumbotron">
    <div class="conteiner text-center">
  <h1 class="display-0">Acesse sua conta</h1>
  <hr class="my-0">
  <p class="lead">Faça login e aproveite nossos serviços.</p>
  </div>


<form id="contato">
  <div class="form-group">
    <label for="inputEmail1">Email</label>
    <input type="email" class="form-control size-input" id="inputEmail1" aria-describedby="emailHelp" placeholder="contato@dominio.com">
  </div>
  <label for="inputSenha1">Senha</label>
    <input type="password" class="form-control size-input" id="inputSenha1" aria-describedby="senhaHelp" placeholder="******">
    <small id="senhalHelp" class="form-text text-muted">* mínimo 6 caracteries.</small>
  <button type="submit" class="btn btn-primary">entrar</button>
  <button type="" class="btn btn-success">esqueci minha senha</button>
</form>
</div>
</div>
@endsection