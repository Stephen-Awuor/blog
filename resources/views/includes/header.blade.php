<!DOCTYPE html>
<html lang="en">
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
         <!-- Styles -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>StoryScape</title>
    </head>
    <body>
       
        <main><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">StoryScape</a>
              <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
                @auth
                <span class="navbar-text">
                    Welcome, {{auth()->user()->firstname}}
                </span>&nbsp;&nbsp;
                
                <span class="navbar-text">
                    <form class="inline" methos="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa fa-sign-out"></i>
                      </form>
                      @else
                  </span>
                  <span class="navbar-text">
                    <a href="/register" class="hover:text-laravel"
                    ><i class="fa-solid fa-user-plus"></i> Register</a>
                  </span>
                  <span class="navbar-text">
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                  </span>
                  @endauth
              </div>
            </div>
          </nav>
    @yield('content')
        </main>
</body>
</html>