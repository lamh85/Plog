@extends('layouts.default')

@section('content')

<h1>Create a new blog post!</h1>

<form action="/post" method="POST">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

  <label for="title">Title</label>
  <input name="title">

  <label for="body">Body</label>
  <input name="body">

  <button type="submit">Submit!</button>
</form>

@stop