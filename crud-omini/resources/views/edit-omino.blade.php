@extends('layouts.main-layout')
@section('content')
  <div class="container-form">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class="" action="{{route('update', $omino['id'])}}" method="post">
      @csrf
      @method('POST')
      <label for="">FIRST NAME: </label>
      <input type="text" name="firstName" value="{{$omino['firstName']}}">
      <br>
      <label for="">LAST NAME: </label>
      <input type="text" name="lastName" value="{{$omino['lastName']}}">
      <br>
      <label for="">ADDRESS: </label>
      <input type="text" name="address" value="{{$omino['address']}}">
      <br>
      <label for="">CODE: </label>
      <input type="text" name="code" value="{{$omino['code']}}">
      <br>
      <label for="">STATE: </label>
      <input type="text" name="state" value="{{$omino['state']}}">
      <br>
      <label for="">PHONE NUMBER: </label>
      <input type="text" name="phoneNumber" value="{{$omino['phoneNumber']}}">
      <br>
      <label for="">ROLE: </label>
      <input type="text" name="role" value="{{$omino['role']}}">
      <br>
      <div class="submit">
        <button type="submit" name="submit">UPDATE</button>
      </div>
    </form>
  </div>

@endsection
