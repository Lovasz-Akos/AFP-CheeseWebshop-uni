<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cheesy</title>
    </head>

    <body>
    @extends('landing_layouts.app')

    @push('css')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
    @endpush
        <div class="container">
            <h1>Cheesy</h1>
            <p>Welcome to Cheesy! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Aenean dignissim mattis ultricies. Integer vitae purus at erat suscipit finibus. 
                 Phasellus tellus quam, semper nec consequat et, varius at tortor. 
                 Donec commodo turpis metus, non gravida ex dapibus at.
            
            @if (Route::has('login'))
                <div class="nav">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"">Register</a>
                        @endif
                    @endif
                </div>
            @endif
            
        </div>
    </body>
</html>