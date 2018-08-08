<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script>
            if(navigator.userAgent.indexOf("Speed Insights") == -1) {
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-68616424-6', 'auto');
                ga('send', 'pageview');
            }
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proof of Concept</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('sass/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/loading.css') }}">

        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/loading.js') }}"></script>

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

            <div class="content">
                <div class="title m-b-md">
                    OBJECT ORIENTIZER
                </div>

                <div class="links">
                    {{--<a href="{{ route('gitdocumentation') }}" target="_blank">Documentation</a>--}}
                    {{--<a href="{{ route('github') }}" target="_blank">GitHub</a>--}}
                </div>

                @include('partials.fileupload')
            </div>
        </div>
    </body>
</html>
