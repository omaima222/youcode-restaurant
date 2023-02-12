
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
         <link rel="stylesheet" href="{{url('sass/main.css')}}">
    </head>
    <body class="welcome">
        <div class="navBar">
            <div class="navBar_buttons">
             <button><a href="{{route('menu')}}">menu</a></button>
             @guest
                    @if (Route::has('login'))
                       <button><a href="{{ route('register') }}">sign up</a></button>
                    @endif
                    @if (Route::has('register'))
                        <button><a href="{{ route('login') }}">log in</a></button>
                    @endif
                    @else
                        <button><a href="{{ route('Dashboard.index') }}">Dashboard</a></button>  
             @endguest
            </div>
        </div>
        <div class="welcomeTo">
            <h3>Welcome to our restaurant</h1>
            <h1>YouRest</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis enim, corporis aspernatur quae eius nemo eos aliquid sapiente rem reprehenderit quos tempora praesentium nostrum itaque dolorem architecto sint, ducimus excepturi.</p>
            <div class="welcomeTo_buttons">
                <button class="welcomeTo_buttons_f">reservation</button>
                <button class="welcomeTo_buttons_s"><a href="{{route('menu')}}">View menu</a></button>
            </div>
        </div>
    </body> 
</html>
