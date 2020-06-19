@extends('layouts.main-layout')
@section('content')
  <div class="container-omino">
    <div class="info-omino">
      <ul>
        <li><b>Name:</b> {{$omino['firstName']}} {{$omino['lastName']}}</li>
        <li><b>Address:</b> {{$omino['address']}}</li>
        <li><b>Code:</b> {{$omino['code']}}</li>
        <li><b>State:</b> {{$omino['state']}}</li>
        <li><b>Phone Number:</b> {{$omino['phoneNumber']}}</li>
        <li><b>Role:</b> {{$omino['role']}}</li>
      </ul>
    </div>
    <div class="edit-destroy">
      <a href="{{route('edit', $omino['id'])}}">Edit</a>
      <a href="{{route('destroy', $omino['id'])}}">Delete</a>
    </div>
  </div>
@endsection
