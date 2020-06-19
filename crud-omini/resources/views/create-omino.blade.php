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
    <form class="" action="{{route('store')}}" method="post">
      @csrf
      @method('POST')
      <label for="">FIRST NAME: </label>
      <input type="text" name="firstName" value="{{old('firstName')}}">
      <br>
      <label for="">LAST NAME: </label>
      <input type="text" name="lastName" value="{{old('lastName')}}">
      <br>
      <label for="">ADDRESS: </label>
      <input type="text" name="address" value="{{old('address')}}">
      <br>
      <label for="">CODE: </label>
      <input type="text" name="code" value="{{old('code')}}">
      <br>
      <label for="">STATE: </label>
      <input type="text" name="state" value="{{old('state')}}">
      <br>
      <label for="">PHONE NUMBER: </label>
      <input type="text" name="phoneNumber" value="{{old('phoneNumber')}}">
      <br>
      <label for="">ROLE: </label>
      <input type="text" name="role" value="{{old('role')}}">
      <br>
      <div class="submit">
        <button type="submit" name="submit">CREATE</button>
      </div>
    </form>
  </div>
@endsection
