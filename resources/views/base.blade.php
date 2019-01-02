<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="css/bootstrap-material-design.min.css" rel="stylesheet">
    </head>
    <body>

        @include('otros.menusuperior')

        @yield('content')

        @include('otros.pie')

        <script src="js/popper.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap-material-design.js"></script>

        <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    </body>
</html>
