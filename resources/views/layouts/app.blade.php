<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Projeto Involves - @yield('title')</title>

    <!-- Styles -->
    {{ Html::style(asset('css/app.css')) }}
    {{ Html::style(asset('plugins/bootstrap-3.3.7/css/bootstrap.css')) }}
    {{ Html::style(asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')) }}
    <style>
        .user-icon {
            display: inline-block;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }
    </style>
    @stack('css_styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <img src="{{ asset('/avatares/'.Auth::user()->avatar) }}" class="user-icon">
                                    <span class="text-center">{{ Auth::user()->name }}</span>
                                </a>

                                <li style="margin-top: 6px">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                <ul class="dropdown-menu">

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    {{ Html::script(asset('js/app.js')) }}
    {{ Html::script(asset('plugins/jQuery-3.2.1/jquery.js')) }}
    {{ Html::script(asset('plugins/bootstrap-3.3.7/js/bootstrap.js')) }}
    @stack('js')
    @stack('js_execute')
</body>
</html>
