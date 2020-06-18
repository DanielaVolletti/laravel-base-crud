@extends('layouts.main-layout')
@section('content')
  <form class="" action="{{route('store')}}" method="post">
    @csrf
    @method('POST')
    <label for="">FIRST NAME: </label>
    <input type="text" name="firstName" value="">
    <br>
    <label for="">LAST NAME: </label>
    <input type="text" name="lastName" value="">
    <br>
    <label for="">ADDRESS: </label>
    <input type="text" name="address" value="">
    <br>
    <label for="">CODE: </label>
    <input type="text" name="code" value="">
    <br>
    <label for="">STATE: </label>
    <input type="text" name="state" value="">
    <br>
    <label for="">PHONE NUMBER: </label>
    <input type="text" name="phoneNumber" value="">
    <br>
    <label for="">ROLE: </label>
    <input type="text" name="role" value="">
    <br>
    <button type="submit" name="submit">CREATE</button>
  </form>

@endsection
