@extends('layout')

@section('titulo')
    Agenda
@stop

@section('conteudo')
    <ul class="list-group col-5">
  <li class="list-group-item active">Contatos</li>
  @foreach($contatos as $contato)
    <li class="list-group-item">
      Nome:   {{$contato->nome}} <br>
      Número: {{$contato->numero}}
    </li>
  @endforeach
</ul>
@stop