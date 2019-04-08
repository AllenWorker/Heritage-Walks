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
        <header class="large-12 medium-12 small-12 ">
            <div class="primary callout">
                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name">
                            <h1><a>Heritage Walks</a></h1>
                        </li>
                        <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                    </ul>

                    <section class="top-bar-section">
                        <li><a href="#">Right Button </a></li>
                        <li><a href="#">Right Button Dropdown</a></li>
                        </ul>
                    </section>
                </nav>
            </div>
        </header>

        @yield('content')
        <footer class="large-12 medium-12 small-12">

        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
