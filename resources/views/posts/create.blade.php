@extends('layouts.default')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        We cannot save your post. Please see errors below.
    </div>
@endif

<h1>Create a new blog post!</h1>

<form action="{{URL::route('posts.store')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  @if ( count($errors->first('title')) > 0)
    {{ $errors->first('title') }}
    <p>
  @endIf
  <label for="title">Title</label>
  <input name="title">

  @if ( count($errors->first('body')) > 0)
    {{ $errors->first('body') }}
    <p>
  @endIf
  <label for="body">Body</label>
  <input name="body">

  <button type="submit">Submit!</button>
</form>

@stop