<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/home">
                    Ebook Library
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @can('access-book')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link dropdown text-dark" id="navabarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Fictions
                                  </a>
                                    <div class="dropdown-submenu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ url('/novels') }}">Novels</a>
                                      <a class="dropdown-item" href="{{ url('/comics') }}">Comics</a>
                                    </div>
                    
                                    <a class="nav-link dropdown text-dark" id="navabarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Nonfictions
                                    </a>
                                    <div class="dropdown-submenu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ url('/philosophy') }}">Philosophy</a>
                                      <a class="dropdown-item" href="{{ url('/psychology') }}">Psychology</a>
                                    </div>
                                    <li>
                                        <form class="form-inline"action="{{ url('/search') }}">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                                        {{ __('View Profile') }}
                                    </a>
                                    @can('manage-users')
                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                        User Management
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
        <main class="py-4">
            <div class="container">
                @include('partials.alerts')
                @yield('content')
                <footer class="text-muted">
                    <p class="text-center">This if Footer &copy; READ MORE, RATE US</p>
                </footer>
        </div>
        </main>
    </div>
</body>
</html>