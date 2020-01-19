<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav>
                    <div class="nav-wrapper indigo">
                        <a  class="brand-logo" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}</a>
                        <a href="#" class="sidenav-trigger" data-target="mobile-links">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
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
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-trigger dropdown-button" data-hover="true" data-constrainwidth="false" href="#!"
                                        data-target="profile-dropdown">
                                        {{ Auth::user()->fullname }}
                                    </a>
                                    <ul id="profile-dropdown" class="dropdown-content" style="width: 300px !important">
                                        <li>
                                            <a href="#!"><i class="material-icons">cloud</i>notifications</a>
                                        </li>
                                        <li class="divider" tabindex="-1"></li>
                                        <li>
                                           <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="material-icons">exit_to_app</i>{{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            <ul id="mobile-links" class="sidenav indigo white-text">
                    @guest
                    <li class="white-text">
                            <a class="wave-effect white-text" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="white-text">
                                <a class="wave-effect white-text" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </li>
                @else
                <ul class="collapsible">
                        <li>
                            <div class="collapsible-header waves-effect">
                                <i class="material-icons">account</i>{{ Auth::user()->fullname }}
                            </div>
                            <div class="collapsible-body">
                                <ul>
                                    <li id="users_seller">
                                        <a class="waves-effect" style="text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="material-icons">exit_to_app</i>{{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                @endguest
            </ul>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
    $(document).ready(()=>{
        $('.sidenav').sidenav();
        $('.collapsible').collapsible();
        $('.dropdown-trigger').dropdown({constrainWidth:false});
    });
    </script>
</body>
</html>
