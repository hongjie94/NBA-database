<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>NBA DATABASE 
    @if(request()->route()->uri === 'teams' || request()->route()->uri === 'players')
    | {{strtoupper(request()->route()->uri)}}
    @elseif(request()->route()->uri === '/')
    | HOME
    @endif
  </title>
  
  <!-- Icon -->
  <link rel="icon" href="https://firebasestorage.googleapis.com/v0/b/imagesbucket-468ae.appspot.com/o/NBA%20DATABASE%2Ffavicon.ico?alt=media&token=f7faf55c-a369-4a94-9154-f9890071b3e3" type="image/x-icon"/>

  <!-- Styles -->
  <link rel="stylesheet" href="https://firebasestorage.googleapis.com/v0/b/imagesbucket-468ae.appspot.com/o/NBA%20DATABASE%2Fapp.css?alt=media&token=717077ec-5133-48f3-a7cd-fc89482292d8">

  <!-- Scripts -->
  <script src="https://firebasestorage.googleapis.com/v0/b/imagesbucket-468ae.appspot.com/o/NBA%20DATABASE%2Fapp.js?alt=media&token=4ac26f59-7d55-4795-9cec-cf897dba9534" defer></script>
 
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark nav-color shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          NBA DATABASE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="{{ (request()->route()->uri === '/') ? 'nav-link active' : 'nav-link' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="{{ (request()->route()->uri === 'teams') ? 'nav-link active' : 'nav-link' }}" href="/teams">Teams</a>
          </li> 
          <li class="nav-item">
              <a class= "{{ (request()->route()->uri === 'players') ? 'nav-link active' : 'nav-link' }}" href="/players">Players</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
    @yield('content')
    </main>
    <footer class='mt-auto p-2 footer-color text-white fixed-bottom shadow-sm text-center'>
    © 2021 NBA DATABASE
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </div>
</body>
</html>
