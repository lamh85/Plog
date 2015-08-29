@extends('layouts.default')

@section('content')

Here is the $post variable:
<br>
{{ $posts }}

<p>Here is the foreach loop:
<br>
@forEach ($posts as $post)
  <p>Created: {{ $post->created_at }}
  <br>Last modified: {{ $post->updated_at }}
  <br>Title: {{ $post->id }}
  <br>Body: {{ $post->body }}
@endForEach

@stop