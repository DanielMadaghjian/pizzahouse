<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzas</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
        
        <link href="/css/main.css" rel="stylesheet">
           
        
    </head>
    <body>

            @yield('content')

            <footer>
                Copyright 2020 Pizza House
            </footer>
    </body>
</html>