@extends('layout')

@section('titulo')
    Agenda
@stop

@section('conteudo')
<div class="container">

<div class="row justify-content-center">
  <ul class="list-group col-5">
    <li class="list-group-item active">Contatos</li>
  @foreach($contatos as $contato)
    <li class="list-group-item">
      Nome:   {{$contato->nome}} <br>
      Número: {{$contato->numero}}
    </li>
  @endforeach
  </ul>
</div>

</div>
@stop