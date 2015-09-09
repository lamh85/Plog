@extends('layouts.default')

@section('content')

<h1>Register a new account</h1>

<form action="auth/register" method="POST">
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
  <label for="email">
    Email Address
  </label>
  <input name="email">

  <p>
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