@extends('layouts.default')

@section('content')

<p>Created: {{ $post->created_at }}
<br>Last modified: {{ $post->updated_at }}
<br>Title: {{ $post->title }}
<br>Body: {{ $post->body }}

<form action="/post/{{$post->id}}" method="POST">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="hidden" name="_method" value="PUT">

  <label for="title">Title</label>
  <input name="title" value="{{$post->title}}">

  <label for="body">Body</label>
  <input name="body" value="{{$post->body}}">

  <button type="submit">Submit!</button>
</form>

@stop