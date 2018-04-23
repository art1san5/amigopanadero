<!DOCTYPE html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amigo Panadero') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">  

  </head>
  <body>
      <div id="app">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      {{-- <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header> --}}

      <main role="main" class="inner cover">
        @yield('content')
      </main>

      {{-- <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer> --}}
    </div>

          
      
        </div>
      <!-- Scripts -->
      <script src="{{ asset('js/all.js') }}"></script>
  </body>
</html>
