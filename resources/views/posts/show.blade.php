@extends('layouts.default')

@section('content')

<p>Created: {{ $post->created_at }}
<br>Last modified: {{ $post->updated_at }}
<br>Title: {{ $post->title }}
<br>Body: {{ $post->body }}

@if (count($errors) > 0)
    <div class="alert alert-danger">
        We cannot save your post. Please see errors below.
    </div>
@endif

<form action="/posts/{{$post->id}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="_method" value="PUT">

  <p>
  @if ( count($errors->first('title')) > 0)
    {{ $errors->first('title') }}
    <p>
  @endIf
  <label for="title">Title</label>
  <br>
  <input name="title" value="{{$post->title}}">

  <p>
  @if ( count($errors->first('body')) > 0)
    {{ $errors->first('body') }}
    <p>
  @endIf  
  <label for="body">Body</label>
  <br>
  <textarea name="body">{{$post->body}}</textarea>

  <button type="submit">Submit!</button>
</form>

<h2>Add a comment</h2>

<form action="/comments" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="post_id" value="{{$post->id}}">

  <label for="title">Title (optional)</label>
  <input name="title">

  <p>
  @if ( $errors->comments->has('body') )
    <div class="alert alert-danger">
      We cannot save your comment:
      <p>{{ $errors->comments->first('body') }}
    </div>
  @endIf
  <!--
    The print_r of $errors->comments:
    Illuminate\Support\MessageBag Object ( [messages:protected] => Array ( [body] => Array ( [0] => Your comment is blank. ) ) [format:protected] => :message )
  -->
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

    <p>
      <form action="/comments/{{$comment->id}}" method="POST" onsubmit="return confirm('Are you sure?')">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Delete Comment</button>
      </form>
    </p>

  @endForEach

@stop