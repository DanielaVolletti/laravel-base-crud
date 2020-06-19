@extends('layouts.main-layout')

@section('content')
  <div id="home">
    <div class="lista">
      <h1>LISTA OMINI: </h1>
      <ul>
        @foreach ($omini as $omino)
          <li>
            <a href="{{route('show', $omino['id'])}}">{{$omino['firstName']}} {{$omino['lastName']}}</a>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="create">
      <a href="{{route('create')}}">AGGIUNGI UN OMINO</a>
    </div>
  </div>
@endsection
