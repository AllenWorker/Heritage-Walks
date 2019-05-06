<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', 'Heritage Walks')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="background">
<div class="grid-container">
    <div class="grid-x">
        <header class="large-12 medium-12 small-12">
            <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                <img class="img align-right" src="{{ asset('images/logo.png') }}">
                <button class="menu-icon" type="button" data-toggle="example-menu"></button>
                <div class="title-bar-title">Menu</div>
            </div>
            <nav class="top-bar" id="example-menu">
                <div class="logo-wrapper hide-for-small-only">
                    <div class="logo">
                        <img class="img" src="{{ asset('images/logo.png') }}">
                    </div>
                </div>
                <div class="top-bar-left">
                    <ul class="menu vertical medium-horizontal">
                        <li class="menu-text menu-title">Heritage Walks</li>
                        <li><a href="/">Home</a></li>
                        <li><a href="/trails">Trails</a></li>
                        <li><a href="/stops">Stops</a></li>
                    </ul>
                </div>

                <div class="top-bar-right">
                    <ul class="menu vertical medium-horizontal">
                        @guest
                            <li>
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <div aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <br>
        <div class="padding-top-1 large-12 medium-12 small-12">
            @yield('content')
        </div>
        <footer class="large-12 medium-12 small-12">
            <div class="callout">
                <p class="text-center">Created by 2019 Diploma of Software Development Students
                    <br>
                    Heritage Walks
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
