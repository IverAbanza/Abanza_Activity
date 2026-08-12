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

        .card {
            border: 1px solid #333;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            background-color: #f5f5f5;
        }

        .card h3 {
            margin-top: 0;
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