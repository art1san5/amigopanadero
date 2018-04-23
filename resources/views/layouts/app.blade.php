<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    @yield('top-script')

</head>
<body class="bg-light">
    <div id="app">

             <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="border-right bg-white">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">
                    <p class="text-dark">
                      <span data-feather="arrow-left"></span>
                      Back
                    </p>
                    <li class="active bg-top">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Recipes</a>
                    </li>
                    <li>
                        <a href="#">Categories</a>
                    </li>
                    <li>
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href="#">Settings</a>
                    </li>
                </ul>

                <ul class="list-unstyled components align-bottom border-top" style="bottom: 0; position: fixed; width: 250px;">
                  <li class="pl-2 text-muted">
                    Version 1.0
                  </li>
                </ul>

       
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="pt-0 px-0">


                <header>
              <!-- Fixed navbar -->
              <nav class="navbar navbar-expand-md navbar-dark  bg-warning border-bottom p-3 ">
                <a class="navbar-brand " id="sidebarCollapse"  style="font-size: 16px;" href="javascript:void(0);">
                  <span data-feather="menu" class="mr-2 align-middle" style="height: 30px; width: auto;"></span>
                  Amigo Panadero
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <form class="form-inline w-75 ml-auto">
                    <input class="search form-control w-100 rounded" type="search" placeholder="Search" aria-label="Search">
                  </form>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </header>

              <!-- Begin page content -->
              <main role="main" class="container main-content">

                  <router-view></router-view>
                    @yield('content')
                    
              </main>

            </div>
        </div>



      

    </div><!-- end app -->

    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}"></script>    
    <!-- Icons -->
    <script src="{{ asset('js/feather.min.js') }}"></script>
  
    <script>
      feather.replace()
    </script>

    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

     @yield('bottom-script')

      <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
      </script>

</body>
</html>
