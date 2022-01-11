@extends('layout')

@section('titulo')
    Apagar
@stop

@section('conteudo')

  <? if(isset($contato)) : ?>
    <div class="alert alert-danger col-8" role="alert">
    <p class="text-center">Contato apagado</p>
    nome: {{$contato->nome}} <br>
    numero: {{$contato->numero}}
    </div>
  <? endif ?>

  <form class="col-8" action="https://laravel-on-replit.mqj.repl.co/destroiContato" method="get">
    <div class="form-group">
      <label for="nome">Nome do contato</label>
      <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <button type="submit" class="btn btn-primary">Apagar</button>
  </form>
@stop