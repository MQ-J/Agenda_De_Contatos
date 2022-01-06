@extends('layout')

@section('titulo')
    Agenda
@stop

@section('conteudo')
    <ul class="list-group col-8">
  <li class="list-group-item active">Contatos</li>
  @foreach($contatos as $contato)
    <li class="list-group-item">
      {{$contato->nome}} <br>
      {{$contato->numero}}
    </li>
  @endforeach
</ul>
@stop