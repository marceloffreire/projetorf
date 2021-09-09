@extends('site.master.layout')
@section('content')
<div class="conteiner py-0">
<div class="jumbotron">
    <div class="conteiner text-center">
  <h1 class="display-0">Cadastro</h1>
  <hr class="my-0">
  <p class="lead">Faça seu cadastro e aproveite nossos serviços.<br> Sem contratos, sem compromissos.</p>
  </div>


<form id="contato">
<div class="form-group">
    <label for="exampleInputEmail1">Seu nome</label>
    <input type="text" class="form-control size-input" id="exampleInputNome1" aria-describedby="nomeHelp" placeholder="nome">
  </div>
  <div class="form-group">
   <label for="exampleInputEmail1">Seu CPF</label>
    <input type="text" class="form-control size-input" id="exampleInputCPF1" aria-describedby="cpfHelp" placeholder="000.000.000-00">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Seu email</label>
    <input type="email" class="form-control size-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contato@dominio.com">
  </div>
  <label for="exampleInputSenha1">Crie uma senha</label>
    <input type="password" class="form-control size-input" id="exampleInputSenha1" aria-describedby="senhaHelp" placeholder="******">
    <small id="senhalHelp" class="form-text text-muted">* mínimo 6 caracteries.</small>
    <label for="exampleInputSenha1">Repita sua senha</label>
    <input type="password" class="form-control size-input" id="exampleInputSenha2" aria-describedby="senhaHelp" placeholder="******">
    <small id="senhalHelp" class="form-text text-muted">* mínimo 6 caracteries.</small>
    <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><a href="{{route('site.termodeuso')}}">Aceito os termos de Uso</a></label>
  </div>
  <button type="submit" class="btn btn-primary">cadastrar</button>
</form>
</div>
</div>
@endsection