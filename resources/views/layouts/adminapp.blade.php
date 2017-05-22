<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SSBC @yield('title')</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/application.css') }}" rel="stylesheet">
        <!-- Scripts -->
        <script>
        window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    @if (Auth::guest())
                    @else
                    <a id="menu-toggle" href="#"><span id="main_icon" class="glyphicon glyphicon-indent-right" onclick="toggleSidebar(event)"></span></a>
                    @endif
                    
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/admin') }}">
                            SSBC Online Application System
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('login') }}">User</a></li>
                                <li><a href="{{ route('admin.login') }}">Admin</a></li>
                            </ul>
                        </li>
                        @else
                        
                        <li>
                            <a href="{{ route('admin.show', auth()->user()->id) }}" role="button" aria-expanded="false">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        
                        
                        @endif
                    </ul>
                    
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>