<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{url('sass/main.css')}}">
    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body class="mainbody">
    <div id="app" >
        <div class="navBar">
            <h1><a href="{{route('welcome')}}"> {{ config('app.name', 'Laravel') }}</a></h1>
            <div class="navBar_buttons">                  
                        <button><a href="{{route('menu')}}">menu</a></button>      
                        @guest
                            @if (Route::has('login'))
                                <button><a cla ss="nav-link" href="{{ route('login') }}">log in</a></button>
                    
                            @endif
                            @if (Route::has('register'))
                                <button><a href="{{ route('register') }}">sign up</a></button>
                            @endif
                            @else
                                <button>
                                <a class="profile" href="{{ route('profile.index') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                </button>

                                <button>
                                <a class="logout" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                </button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                </div>
        </div>
        
        <main class="mainbody">
            @yield('content')
        </main>
    </div>
</body>
</html>
