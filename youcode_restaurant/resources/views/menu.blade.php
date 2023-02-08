<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
         <link rel="stylesheet" href="{{url('sass/main.css')}}">
    </head>
    <body class="menu">
        <div class="menuBar">
            <div class="navBar">
                <h1><a href="{{route('welcome')}}">YouRest</a></h1>
                <div class="navBar_buttons">
                <button><a href="{{route('welcome')}}">Welcome</a></button>
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
            <h1 class="menuTitle">MENU</h1>
        </div>
        <div class="allDishes">
            @if(count($dish)>0)
            @foreach($dish as $dish)
                <section class="dish">
                    <img  src="{{url('dishes imgs/toast .jpg')}}" alt="{{$dish['image']}}">
                    <section class="dishInfo">
                        <div class="dishInfo_head">
                        <h1>{{$dish['name']}}</h1>
                        <h2>{{$dish['price']}} $</h2>
                        </div>
                        <p>{{$dish['description']}}</p>
                        <button>order</button>
                    </section>
                </section>
            @endforeach
            @else 
            <h1>No dishes availabale</h1>
            @endif
        </div>
    </body> 
</html>
