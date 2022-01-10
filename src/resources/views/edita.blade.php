@extends('layout')

@section('titulo')
    Edita
@stop

@section('conteudo')

  <? if(isset($contato)) : ?>
    <div class="alert alert-warning" role="alert">
    Agora atualizado para:
    {{$contato->nome}} <br>
    {{$contato->numero}}
    </div>
  <? endif ?>
  <? if(isset($erro)) : ?>
    <div class="alert alert-danger" role="alert">
    <?= $erro ?>
    </div>
  <? endif ?>

  <form class="col-8" action="https://laravel-on-replit.mqj.repl.co/atualizaContato" method="get">
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
  
@stop