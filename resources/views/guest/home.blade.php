{{-- copypaste of the app.blade.php --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        content="width=device-width, initial-scale=1"
        name="viewport"
    >

    <!-- CSRF Token -->
    <meta
        content="{{ csrf_token() }}"
        name="csrf-token"
    >

    <title>
        Foxy
        {{-- {{ config('app.name', 'Foxy') }} --}}
    </title>

    <!-- Scripts Needs Change -->
    {{-- here: front.js --}}
    {{-- webpack.mix: .js("resources/js/front.js", "public/js") --}}
    {{-- create the file in resources/js{front.js} --}}
    {{-- copy the app.js and past into front.js --}}
    <script
        src="{{ asset('js/front.js') }}"
        defer
    ></script>

    <!-- Fonts -->
    <link
        href="//fonts.gstatic.com"
        rel="dns-prefetch"
    >
    <link
        href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet"
    >

    <!-- Styles -->
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
</head>

<body>
    <div id="app">
    </div>
</body>

</html>
