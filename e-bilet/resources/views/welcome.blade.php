<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">



        <style>
            body{
                background-image:  url({{asset("/images/welcome_background.jpg")}});
                background-size: cover;

        </style>



    </head>
    <body>
        <div class="box">
            <div class="powitanie">
                <h1>Witaj na stronie Polskich Kolei Pociągowych</h1>
                <h2>Aby zakupić bilet należy się najpierw zalogować, jeżeli nie posiadasz konta zarejestruj sie:</h2>

            </div>
            @if (Route::has('login'))
                <div class="logowanie">
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="Zaloguj">Zaloguj</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="Rejestracja">Rejestracja</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>
    </body>
</html>
