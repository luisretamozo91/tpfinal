<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title') </title>

        <link rel="stylesheet" href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}">
        <script src="{!! asset('plugins/bootstrap/js/jquery-3.2.1.min.js') !!}"></script>
        <script src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    </head>
    <body>
        @include('shared.navbar')
        
        @yield('content')
    </body>
</html>