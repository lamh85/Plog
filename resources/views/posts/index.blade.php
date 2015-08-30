@extends('layouts.default')

@section('content')

Here is the $post variable:
<br>
{{ $posts }}

<p>Here is the foreach loop:
<br>
@forEach ($posts as $post)
  <p><a href="/post/{{$post->id}}" >{{ $post->title }}</a>
  <br>Created: {{ $post->created_at }}
  <br>Last modified: {{ $post->updated_at }}
@endForEach

@stop