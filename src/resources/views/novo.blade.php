@extends('layout')

@section('titulo')
    Novo
@stop

@section('conteudo')

  <? if(isset($contato)) : ?>
    <div class="alert alert-success" role="alert">
    {{$contato->nome}} <br>
    {{$contato->numero}}
    </div>
  <? endif ?>

<form class="col-8" action="{{ Route('novocontato') }}" method="get">
  <div class="form-group">
    <label for="nome">Nome do contato</label>
    <input type="text" class="form-control" id="nome" required>
  </div>
  <div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" placeholder="somente números" required>
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
@stop