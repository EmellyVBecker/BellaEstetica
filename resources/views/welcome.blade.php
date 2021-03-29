<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>For you system</title>

        <!-- Styles -->
        <style>
            .container {
                height: 101vh;
                width: 100%; 
                background-color: white;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
                font-family: 'Quicksand', sans-serif;
            }
            p {
                font-size: 30px;
                font-family: 'Quicksand', sans-serif;
                line-height: 40px;
            }
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: 'Quicksand', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="flex-center  container"> 
        <div class=titulo>
        <img src="https://i.pinimg.com/originals/43/c5/5d/43c55d840d2169988d830331659726d2.png" width="550px" style="margin-left:320px; margin-top:-20px;"/>
            <h3>
                <p style="font-size:40px; color: #000066; margin-top: 50px; margin-left:468px; margin-right:450px; text-align:center">
                   Bella Estética 
        </p>
            </h3>
        </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color:#000066">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:#000066">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:#000066">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </body>
</html>
