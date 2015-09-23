@extends('layouts.default')

@section('content')

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>

@stop