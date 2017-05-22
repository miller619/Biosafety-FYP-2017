<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SSBC @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/application.css') }}" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                @endif
            </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Swinburne Sarawak Biosafety Community
                    <p>Online Application System</p>
                </div>
            </div>
        </div>
    </body>
</html>