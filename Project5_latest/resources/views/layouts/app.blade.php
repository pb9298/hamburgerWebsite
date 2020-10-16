<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IBRA</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
        <title>IBra</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/ciudad.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <div id="wrapper">
        @include('layouts.header')        
            <main id="main_content">
                @yield('content')
            </main>
        @include('layouts.footer')
    </div>
    </body>
</html>