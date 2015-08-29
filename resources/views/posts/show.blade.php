@extends('layouts.default')

@section('content')

<p>Created: {{ $post->created_at }}
<br>Last modified: {{ $post->updated_at }}
<br>Title: {{ $post->title }}
<br>Body: {{ $post->body }}

@stop