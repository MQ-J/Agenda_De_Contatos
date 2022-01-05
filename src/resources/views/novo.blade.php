@extends('layout')

@section('titulo')
    Novo
@stop

@section('conteudo')
<form class="col-8">
  <div class="form-group">
    <label for="nome">Nome do contato</label>
    <input type="text" class="form-control" id="nome" required>
  </div>
  <div class="form-group">
    <label for="telefone">Número</label>
    <input type="tel" class="form-control" id="telefone" placeholder="somente números" required>
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
@stop