<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <title>Cheesy</title>
        <style>
            body { overflow: hidden;background: url("../img/cheese_index.png") no-repeat center center fixed;background-size: cover;}
            h1 {color: goldenrod;font-family: 'Righteous', cursive;font-size: 80px;}
            .container{padding: 100px;}
            .container p{width: 600px;color:white;font-size:20px;font-family: 'Comfortaa', cursive;line-height: 1.5em;text-align: justify;}
            .nav{margin-top:250px;}
            .nav a{padding:15px;color:goldenrod;margin-right: 30px;font-family: 'Comfortaa', cursive;text-decoration: none;font-weight: bold;
                   font-size: 24px;transition: 0.5s ease;border-radius: 5px;border: 2px solid goldenrod;}
            .nav a:hover{background-color: goldenrod;color:white;transition: 0.5s ease;}
        </style>
    </head>
    <body>
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
