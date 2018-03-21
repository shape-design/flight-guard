        <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calculator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Calculator
                </div>

                <div class="links">
                    <input id="date" type="text" placeholder="Flight date" value="2018-08-25">
                    <input id="carrier" type="text" placeholder="Carrier" value="AA">
                    <input id="origin" type="text" placeholder="Origin" value="PAH">
                    <input id="destination" type="text" placeholder="Destination" value="LIH">
                    <input id="price" type="text" placeholder="Total ticket price" value="120">
                    <input id="stops" type="text" placeholder="No of stops" value="0">
                    <input id="weather" type="text" placeholder="Weather" value="1">
                    <button id="calculate">calculate</button>
                </div>
            </div>
        </div>
    <script>
        $(function() {
            $('#calculate').on('click', function(){
                $.ajax({
                    method: "POST",
                    url: "/api/calculate",
                    data: {
                        date: $('#date').val(),
                        carrier: $('#carrier').val(),
                        origin: $('#origin').val(),
                        destination: $('#destination').val(),
                        price: $('#price').val(),
                        stops: $('#stops').val(),
                        weather: $('#weather').val(),
                    }
                })
                .done(function( msg ) {
                    console.log( msg );
                });

            })
            // Handler for .ready() called.
        });
    </script>
    </body>
</html>
