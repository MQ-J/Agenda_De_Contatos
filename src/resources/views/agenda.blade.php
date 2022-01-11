@extends('layout')

@section('titulo')
    Agenda
@stop

@section('conteudo')
<div class="container">

<div class="row justify-content-md-center">
  <ul class="list-group col-md-5">
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