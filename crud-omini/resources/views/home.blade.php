@extends('layouts.main-layout')

@section('content')
  <ul>
    @foreach ($omini as $omino)
      <li>
        <a href="#">{{$omino['firstName']}} {{$omino['lastName']}}</a>
      </li>
    @endforeach
  </ul>

@endsection
