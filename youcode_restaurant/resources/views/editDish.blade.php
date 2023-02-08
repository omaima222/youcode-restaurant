@extends('layouts.app')

<link rel="stylesheet" href="{{url('sass/main.css')}}">

@section('content')
<div class="dishForm">
    <div class="header">Edit the Dish</div>
    <div class="body">
      <form action="{{route('Dashboard.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="anInput">
            <label for="mage">Name</label>
            <input type="text" name="name" value="{{ $dish['name'] }}">
            @error('name')
               <div class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>
          <div class="anInput">
            <label for="mage">Image</label>
            <input type="text"  name="image" value="{{ $dish['image'] }}">
            @error('image')
               <div class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>
          <div class="anInput">
            <label for="mage">Description</label>
            <textarea id="" name="description" cols="30" rows="8" >{{ $dish['description'] }}</textarea>
            @error('description')
               <div class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>
          <div class="anInput">
            <label for="mage">Price</label>
            <input type="text" name="price" value="{{ $dish['price'] }}">
            @error('price')
               <div class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </div>
            @enderror
          </div>
          <button type="submit" name="add">Update</button>
      </form>
    </div>
</div>
@endsection
