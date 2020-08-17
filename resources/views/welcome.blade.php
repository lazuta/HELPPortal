<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('asset/logo.svg')}}" type="image/x-icon">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .w_logo h1 {
                font-size: 2.5em;
                color: #2D2E83;
            }

            .w_logo img {
                width: 500px;
                animation: logo 2s ease-in-out;
            }

            @media(max-width: 560px) {
                .w_logo img {
                    width: 300px;
                }
            }

            @media(max-width: 330px) {
                .w_logo img {
                    width: 200px;
                }
            }

            @keyframes logo {
                from {
                    transform: rotate(0deg);
                } to {
                    transform: rotate(360deg);
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="{{ url('/help') }}">Помощь</a>
                    @auth
                        <a href="{{ url('/home') }}">Главная</a>
                    @else
                        <a href="{{ route('login') }}">Авторизация</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="content">
                    <div class="w_logo">
                        <img src="{{asset('asset/logo.svg')}}" alt="logo">
                        <h1>HELP ME BY</h1>
                        <p> Версия 1.3 - Альфа - тестирование <br>
                            Место, где собраны волонтеры, готовы оказать помощь пострадавшим во время мирных акций на территории Республики Беларусь
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
