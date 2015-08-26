@extends('layouts.default')

@section('content')

  <h1>Create a new blog post!</h1>

  <form action="post" method="POST">
    <label for="title">Title</label>
    <input name="title">
  </form>

@stop