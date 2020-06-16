@extends('mainLayout')
@section('content')
<h1>Lista cagnolini: </h1>
<ul>
  @foreach ($cagnolini as $cagnolino)
    <li>
      {{$cagnolino['id']}})
      <a href="{{route('showCagnolino', $cagnolino['id'])}}"> {{ $cagnolino['nome'] }} </a>
    </li>
  @endforeach
</ul>
@endsection
