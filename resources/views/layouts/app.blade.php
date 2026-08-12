<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>
</head>

<body>

    <h1>My Website</h1>

    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <p>© 2026 My Website</p>

</body>

</html>