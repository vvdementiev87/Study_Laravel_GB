<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div>
        <h1>News page</h1>
    </div>
    <div>
        <li>
            <ul><a href="/">Main</a></ul>
            <ul><a href="/info">Info</a></ul>
        </li>
    </div>
    @if (is_null($id))
    <div>All news</div>
    @else
    <div>News number: {{ $id }}</div>
    @endif
</body>

</html>