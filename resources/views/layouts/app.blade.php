<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-dark text-white shadow-sm">
                        <div class="container-fluid">
                            <a class="navbar-brand ebook text-white" href="/home">
                                <i class="fas fa-book">  Ebook Library</i> 
                            </a>
                            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon bg-dark"></span>
                            </button>
            
                            <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto bg-dark">
                                    @can('access-book')
                                    <li class="nav-item dropdown bg-dark">
                                        <a class="nav-link dropdown-toggle ebook bg-dark text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Categories
                                        </a>
                                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item bg-dark text-white ebook" href="/allcateg">All Categories</a>
                                            <a class="nav-link dropdown bg-dark text-white ebook" id="navabarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Fictions
                                              </a>
                                                <div class="dropdown-submenu bg-dark text-white ebook" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item bg-dark text-white ebook" href="{{ url('/novels') }}">Novels</a>
                                                  <a class="dropdown-item bg-dark text-white ebook" href="{{ url('/comics') }}">Comics</a>
                                                </div>
                                
                                                <a class="nav-link dropdown bg-dark text-white ebook" id="navabarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Nonfictions
                                                </a>
                                                <div class="dropdown-submenu bg-dark text-white ebook" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item bg-dark text-white ebook" href="{{ url('/philosophy') }}">Philosophy</a>
                                                  <a class="dropdown-item bg-dark text-white ebook" href="{{ url('/psychology') }}">Psychology</a>
                                                </div>
                                                <li>
                                                    <form class="form-inline"action="{{ url('/search') }}">
                                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required="">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fas fa-search"></i></button>
                                                      </form>
                                                </li>
                                        </div>
                                      </li>
                                    @endcan
                                    
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item ebook text-white">
                                            <a class="nav-link ebook text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item ebook text-white">
                                                <a class="nav-link ebook text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown ebook">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <i class="fas fa-user"> {{ Auth::user()->name }}</i> 
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right bg-dark text-white ebook" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item bg-dark text-white ebook" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <a class="dropdown-item bg-dark text-white ebook" href="{{ route('user.profile', Auth::user()->id) }}">
                                                    {{ __('View Profile') }}
                                                </a>
                                                @can('manage-users')
                                                <a class="dropdown-item bg-dark text-white ebook" href="{{ route('admin.users.index') }}">
                                                    User Management
                                                </a>
                                                <a class="dropdown-item bg-dark text-white ebook" href="{{ route('user.addbook') }}">
                                                    Upload Book
                                                </a>    
                                                @endcan
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
            </div>
    </div>
    <div class="container">
        <main>
            <div class="page-container">
                <div class="content-wrap">
                    @include('partials.alerts')   
                    @yield('content')
                      <footer class="text-muted">
                      <p class="text-center">&copy; Ebook Library 2020</p>
                  </footer>
                 </div>
            </div>
        </main>
    </div>
</body>
</html>