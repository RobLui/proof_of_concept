<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proof of Concept</title>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('sass/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('oo-logo.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('oo-logo.png') }}" type="image/x-icon"/>
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

        <div class="content full-height">
            @yield('content')
        </div>

    </div>
</body>

</html>
