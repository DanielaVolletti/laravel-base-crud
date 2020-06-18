@extends('layouts.main-layout')

@section('content')
  <h1>LISTA OMINI</h1>
  <a href="{{route('create')}}">AGGIUNGI UN OMINO</a>
  <ul>
    @foreach ($omini as $omino)
      <li>
        <a href="{{route('show', $omino['id'])}}">{{$omino['firstName']}} {{$omino['lastName']}}</a>
      </li>
    @endforeach
  </ul>

@endsection
