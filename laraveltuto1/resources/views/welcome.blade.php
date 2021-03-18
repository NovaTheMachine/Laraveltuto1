<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>


    </head>
    <body class="antialiased">

    <h1>Hello from France </h1>

    <p>il est actuellement  {{ date('j/m/Y g:i ') }} </p>

    <footer>
        <p>&copy; Copyright 2021 &middot; <a href="#">About Us</a> </p>
    </footer>
    </body>
</html>
