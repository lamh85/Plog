<html>

<head>

  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- BOOTSTRAP JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <title>
    @yield('title')
  </title>

  @yield('head_extra')
</head>

<body>

  Menu: 
  <a href="/">Home</a> |
  <a href="/about">About Me</a> | 
  <a href="{{URL::route('posts.create')}}">New Blog Post</a> |
  <a href="{{URL::route('posts.index')}}">All Blog Posts</a> |
  <a href="{{URL::route('users.create')}}">Register</a> |
  <a href="auth/login">Login</a>
  <hr>
  <br>
  
  @yield('content')
</body>


</html>