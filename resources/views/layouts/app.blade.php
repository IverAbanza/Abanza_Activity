<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
            color: #222;
        }

        header {
            background: #222;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0 0 10px;
        }

        nav a {
            color: white;
            margin-right: 15px;
        }

        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background: #222;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background: #444;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .success {
            background: #d4edda;
            padding: 10px;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 30px;
        }
    </style>
</head>

<body>

<header>

    <h1>My Website</h1>

    <nav>
        <a href="{{ url('/') }}">Home</a>

        <a href="{{ url('/contact') }}">Contact</a>

        <a href="{{ route('products.index') }}">Products</a>
    </nav>

</header>

<main>

    @yield('content')

</main>

<footer>
    <p>&copy; 2026 My Website</p>
</footer>

</body>

</html>