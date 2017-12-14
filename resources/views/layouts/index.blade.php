<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Micramanio</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        @include('layouts.navbar')
        @if ('href'!=('/'))
            @include('layouts.navbardeux')
        @else
        @endif
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>