@extends('layouts.app')

<link rel="stylesheet" href="{{url('sass/main.css')}}">

@section('content')
<div class="dash_menu">
    <div class="dash_header">
          <h1>Menu</h1>
          <button><a href="{{route('Dashboard.create')}}">Add a dish</a></button>
    </div>
    @if(count($dish)>0)
        <table class="menuTable">
            <thead>
                <tr>
                    <th>image</th>
                    <th>name</th>
                    <th>description </th>
                    <th>price</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($dish as $dish)
                <tr>
                    <td><img  src="{{url('dishes imgs/'.$dish['image'])}}" alt="{{$dish['image']}}"></td>
                    <td>{{$dish['name']}}</td>
                    <td title="{{$dish['description']}}">{{ \Illuminate\Support\Str::limit($dish['description'], 65, $end='...') }}</td>
                    <td>{{$dish['price']}} $</td>
                    <td>
                    <form action="{{ route('Dashboard.destroy' , $dish['id']) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>    
                    </td>
                    <td><button><a href="{{ route('Dashboard.show', ['Dashboard'=> $dish['id']])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else 
    <h1 class="nothing">No dishes availabale</h1>
    @endif
</div>
@endsection
