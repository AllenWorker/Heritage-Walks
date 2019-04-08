<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="grid-container">
    <div class="grid-x">
        <header class="large-12 medium-12 small-12">
            <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle="example-menu"></button>
                <div class="title-bar-title">Menu</div>
            </div>
                <nav class="top-bar" id="example-menu">
                    <div class="top-bar-left">
                        <ul class="menu vertical medium-horizontal">
                            <li class="menu-text">Heritage Walks</li>
                            <li><a href="#">Trails</a></li>
                            <li><a href="#">Stops</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu vertical medium-horizontal">
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                </nav>
        </header>
        <br>

        @yield('content')

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

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>