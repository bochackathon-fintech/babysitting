<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTRUST.IT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    UTRUST.IT
                </div>
                <div class="links">
                    {{--<script language="javascript" src="https://www.iban.com/remote/default.js"></script>--}}
                    {{--<div id="ibanvalidation" >--}}
                        {{--<input type="text" placeholder="IBAN to check..." id="ibant3st" >--}}
                        {{--<input type='button' id='9fau8b43f9' value='Check' >--}}
                        {{--<p><span id="IBANresult"></span></p>--}}
                        {{--<p id="p05w34r">Powered by <a href="https://www.iban.com/">IBAN</a>.com<br></p>--}}
                    {{--</div>--}}

                    <input placeholder="               type IBAN to verify" type="text" style="font-size:30px; font-weight: 100; width: 100%;height: 50px;">
                    <button class="btn btn-info">Check</button>
                </div>
                <h4 class="links">Public IBAN Repository & Verification</h4>

            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
