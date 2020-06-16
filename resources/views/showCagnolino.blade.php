@extends('mainLayout')
@section('content')
  <div class="">
    <h1>Nome: {{$cagnolino['nome']}}</h1>
    <h1>tipo: {{$cagnolino['tipo']}}</h1>
    <h1>Altezza: {{$cagnolino['altezza']}}</h1>
    <h1>Peso: {{$cagnolino['peso']}}</h1>
  </div>
@endsection
