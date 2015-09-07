@extends('layouts.default')

@section('content')

<p>The variable type for $post is {{gettype($post)}}.

<p>Created: {{ $post->created_at }}
<br>Last modified: {{ $post->updated_at }}
<br>Title: {{ $post->title }}
<br>Body: {{ $post->body }}

<form action="/posts/{{$post->id}}" method="POST">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="hidden" name="_method" value="PUT">

  <p>
  <label for="title">Title</label>
  <br>
  <input name="title" value="{{$post->title}}">

  <p>
  <label for="body">Body</label>
  <br>
  <textarea name="body">{{$post->body}}</textarea>

  <button type="submit">Submit!</button>
</form>

<h2>Add a comment</h2>

<form action="/comments" method="POST">
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
  <input type="hidden" name="post_id" value="{{$post->id}}">

  <label for="title">Title (optional)</label>
  <input name="title">

  <p>
  <label for "body">Comment</label>
  <textarea name="body"></textarea>
  
  <button type="submit">Submit!</button>
</form>

<h2>Comments</h2>

  @forEach ($comments as $comment)

    Posted at {{$comment->created_at}}:

    <p>
      {{$comment->body}}
    </p>

  @endForEach

@stop