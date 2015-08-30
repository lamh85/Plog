@extends('layouts.default')

@section('content')

Here is the $post variable:
<br>
{{ $posts }}

<p>Here is the foreach loop:
<br>
@forEach ($posts as $post)
  <p>{{ $post->title }}
  <br>Created: {{ $post->created_at }}
  <br>Last modified: {{ $post->updated_at }}
  <br><a href="/post/{{$post->id}}" >View</a> | <a href="/post/{{$post->id}}/edit" >Edit</a>
@endForEach

@stop