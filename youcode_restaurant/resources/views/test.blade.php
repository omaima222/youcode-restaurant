
@extends('layouts.app')

@section('content')
<div style="padding:1rem;display:flex;flex-direction:column;align-items:center"> 
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                     <a href="">ELLO</a>
                </div>                
            </div>
            <div class="testcard">
                @if (count($greetings)>0)
                @foreach ($greetings as $grt)
                <h3><span>{{$grt['id']}}  </span><a href="{{ route( 'ello.show', ['ello' => $grt['id']] )}}">{{$grt['greet']}}</a></h3>
                @endforeach
                @else <h3>no greetings</h3>
                @endif
            </div>
</div>
@endsection