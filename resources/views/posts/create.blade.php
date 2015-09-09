@extends('layouts.default')

@section('content')

<h1>Create a new blog post!</h1>

<form action="{{URL::route('posts.store')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <label for="title">Title</label>
  <input name="title">

  <label for="body">Body</label>
  <input name="body">

  <button type="submit">Submit!</button>
</form>

@stop