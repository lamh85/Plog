@extends('layouts.default')

@section('content')

Here is the $post variable:
<br>
{{ $posts }}

<p>Here is the foreach loop:
<br>
<div class="list-post">
  @forEach ($posts as $post)
    <p>{{ $post->title }}
    <br>Created: {{ $post->created_at }}
    <br>Last modified: {{ $post->updated_at }}
    <br><a href="/posts/{{$post->id}}" >View/Edit</a> | 
    <form action="/posts/{{$post->id}}" method="POST" onsubmit="return confirm('Are you sure?')">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" name="_method" value="DELETE">
      <button type="submit">Delete</button>
    </form>
  @endForEach
</div>

@stop