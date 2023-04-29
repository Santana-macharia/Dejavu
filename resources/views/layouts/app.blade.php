<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Dejavu Technologies Limited' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="header">
        <h1>Dejavu Technologies Limited</h1>
    </div>

    <div class="nav">
        <a href="#">Home</a>
        <a href="#">Products</a>
        <a href="#">Branches</a>
        <a href="#">Blog</a>
        <a href="#">About Us</a>
        <a href="#">Technical</a>
        <a href="#">Support</a>
        <a href="#">Contact</a>
        <a href="#">FAQ</a>
    </div>

    <div class="content">
        <!-- This is where your page content will go -->
        @yield('content')
    </div>

    <div class="footer">
        &copy; 2023 Dejavu Technologies Limited. All rights reserved.
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
