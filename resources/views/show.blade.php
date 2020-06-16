@extends('mainLayout')
@section('content')
  <div class="cagnolino">
    <h2>Nome: {{$cagnolino['nome']}}</h2>
    <h2>tipo: {{$cagnolino['tipo']}}</h2>
    <h2>Altezza: {{$cagnolino['altezza']}} cm</h2>
    <h2>Peso: {{$cagnolino['peso']}} kg</h2>
  </div>
@endsection
