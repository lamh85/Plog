@extends('layouts.default')

@section('content')

<h1>Register a new account</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        We cannot create your account. Please see errors below.
    </div>
@endif

<form action="{{URL::route('users.store')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <label for="first_name">
    First Name
  </label>
  <input name="first_name">

  <p>
  <label for="last_name">
    Last Name
  </label>
  <input name="last_name">

  <p>
  @if ( count($errors->first('email')) > 0)
    <p>
    {{ $errors->first('email') }}
    <p>
  @endIf
  <label for="email">
    Email Address
  </label>
  <input name="email">

  <p>
  @if ( count($errors->first('password')) > 0)
    <p>
    {{ $errors->first('password') }}
    <p>
  @endIf  
  <label for="password">
    Password
  </label>
  <input type="password" name="password">

  <p>
  <label for="password_confirmation">
    Confirm Password
  </label>
  <input type="password" name="password_confirmation">

  <p>
  <button type="submit">Register</button>

</form>

@stop