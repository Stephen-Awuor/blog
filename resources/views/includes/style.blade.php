<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="images/logo.webp" href=""/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <nav class="navbar bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                src="{{url('/images/logo.webp')}}"
                height="26"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
              />
                StoryScape
              </a>
            </div>
          </nav>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    
                   
                </div>
                <div class="navbar-nav ms-auto">
                  <a href="/login" class="nav-item nav-link">Login</a>
                  <a href="/register" class="nav-item nav-link">Register</a>
                </div>
               
            </div>
        </div>
    </nav>
</div>
<main>
  @yield('content')
</main>
</body>
</html>
