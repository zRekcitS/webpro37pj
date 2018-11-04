@extends('layouts.main')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to PYT</title>

        <!-- Fonts -->
        <link href="https://fonts.google.com/specimen/Kanit?selection.family=Kanit" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Kanit', sans-serif;
                font-weight: 200;
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
                font-size: 150px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 26px;
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
                    Welcome to <font color="red">P<font color="#00bfff">Y<font color="#00fa9a">T </font>
                </div>

                <div class="links">
                    <a href="{{ url('webboard/computerhardware') }}">คอมพิวเตอร์ ฮาร์ดแวร์</a>
                    <a href="{{ url('webboard/videogames') }}">วิดิโอเกมส์</a>
                    <a href="{{ url('webboard/lifestyle') }}">ไลฟ์สไตล์</a>
                    <a href="{{ url('webboard/etc') }}">อื่นๆ</a>
                    <a href="{{ url('webboard/market') }}">ซื้อ-ขาย (VIP Only)</a>
                    <a href="{{ url('webboard/lovetalk') }}">LOVE TALK (VIP Only)</a>
                </div>
            </div>
        </div>
    </body>
</html>
