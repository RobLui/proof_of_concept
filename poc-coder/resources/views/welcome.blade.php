<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proof of Concept</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('sass/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

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
                    OBJECTORIENTORIZER
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs" target="_blank">Documentation</a>
                    <a href="{{ route('github') }}" target="_blank">GitHub</a>
                </div>

                <div class="text-center">
                    <label class="btn btn-default" for="file-selector">
                        <input id="file-selector" type="file" style="display:none;">
                        upload a file
                    </label>
                </div>

            </div>

        </div>
    </body>
</html>
