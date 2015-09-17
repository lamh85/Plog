@extends('layouts.default')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    Here is the error object disected:
    <p>{{ $errors->first('title') }}
@endif

<h1>Create a new blog post!</h1>

<form action="{{URL::route('posts.store')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <label for="title">Title</label>
  <input name="title">

  <label for="body">Body</label>
  <input name="body">

  <button type="submit">Submit!</button>
</form>

@stop