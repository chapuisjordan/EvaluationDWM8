<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Micramanio</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header>
        @include('layouts.navbar')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</html>