<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    @stack('css')

    @stack('script-head')
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sanber Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('question.index')}}">Question <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{route('myquestion.index', Auth::user()->id)}}">MyQuestion <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('category.index')}}">Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('tag.index')}}">Tag</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('answer.index')}}">Answer</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    @yield('content')
    
    @stack('scripts')
</body>
</html>