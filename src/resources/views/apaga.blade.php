@extends('layout')

@section('titulo')
    Apagar
@stop

@section('conteudo')
<div class="container">

<div class="row justify-content-center">
  <? if(isset($contato)) : ?>
    <div class="alert alert-danger col-5" role="alert">
    <p class="text-center">Contato apagado</p>
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
  <form class="col-5" action="https://laravel-on-replit.mqj.repl.co/destroiContato" method="get">
    <div class="form-group">
      <label for="nome">Nome do contato</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <button type="submit" class="btn btn-primary">Apagar</button>
  </form>
</div>

</div>
@stop