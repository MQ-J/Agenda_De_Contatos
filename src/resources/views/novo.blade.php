@extends('layout')

@section('titulo')
    Novo
@stop

@section('conteudo')
<div class="container">

<div class="row justify-content-center">
  <? if(isset($contato)) : ?>
    <div class="alert alert-success col-5" role="alert">
    <p class="text-center">Contato criado com sucesso</p>
    nome: {{$contato->nome}} <br>
    numero: {{$contato->numero}}
    </div>
  <? endif ?>
</div>

<div class="row justify-content-center">
  <form class="col-5" action="https://laravel-on-replit.mqj.repl.co/guardaContato" method="get">
    <div class="form-group">
    <label for="nome">Nome do contato</label>
    <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
    <label for="numero">Número</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="somente números" required>
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
  </form>
</div>

</div>
@stop