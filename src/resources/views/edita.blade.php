@extends('layout')

@section('titulo')
    Edita
@stop

@section('conteudo')
<div class="container">

<div class="row justify-content-center">
  <? if(isset($contato)) : ?>
    <div class="alert alert-warning col-5" role="alert">
    <p class="text-center">Contato atualizado para:</p>
    nome: {{$contato->nome}} <br>
    numero: {{$contato->numero}}
    </div>
  <? endif ?>
  <? if(isset($erro)) : ?>
    <div class="alert alert-danger col-5" role="alert">
    <?= $erro ?>
    </div>
  <? endif ?>
</div>

<div class="row justify-content-center">
  <form class="col-5" action="https://laravel-on-replit.mqj.repl.co/atualizaContato" method="get">
    <div class="form-group">
    <label for="nome">Nome do contato</label>
    <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
    <label for="novonome">Novo Nome</label>
    <input type="text" class="form-control" id="novonome" name="novonome" required>
    </div>
    <div class="form-group">
    <label for="novonumero">Novo Número</label>
    <input type="text" class="form-control" id="novonumero" name="novonumero" placeholder="somente números" required>
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>

</div>  
@stop