<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Website')</title>

    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        nav a {
            margin-right: 15px;
        }
    </style>
</head>

<body>

    <h1>My Website</h1>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <hr>

    @yield('content')

    <hr>

    <p>© 2026 My Website</p>

</body>
</html>