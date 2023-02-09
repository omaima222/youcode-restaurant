@extends('layouts.app')

@section('content')
<div class="sign">
    <div class="signForm">
        <div class="header">Profile</div>
        <div class="body">
            <form method="POST" action="">
                @csrf
                @method('PUT')
                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" placeholder="Name" required autocomplete="name" autofocus>

                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" placeholder="Email Address" required autocomplete="email">

                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="Password"  placeholder="new password" required autocomplete="new-password">

                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password"  required autocomplete="new-password">
                </div>
        
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>
</div>
@endsection
