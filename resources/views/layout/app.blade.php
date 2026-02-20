<!DOCTYPE html>
<html>
<head>
    <title>Barber Juragan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f0f0f;
            color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background: #111;
        }

        .logo {
            color: #e10600;
            font-weight: bold;
            font-size: 22px;
        }

        .nav-link-custom {
            color: #ddd;
            text-decoration: none;
            margin-right: 15px;
        }

        .nav-link-custom:hover {
            color: #e10600;
        }

        .btn-red {
            background: #e10600;
            color: white;
            border: none;
        }

        .btn-red:hover {
            background: #b80000;
        }

        .card-dark {
            background: #1a1a1a;
            border: 1px solid #222;
            border-radius: 12px;
        }

        .section {
            padding: 80px 0;
        }

        footer {
            background: #111;
            color: #888;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
    <img src="{{ asset('images/LogoJuragan.png') }}"
        alt="Logo" 
        style="height:70px; margin-right:15px;">
        
    <span style="color:#e10600; font-weight:bold; font-size:20px;">
        
    </span>
</a>
        <div>
            <a href="/" class="nav-link-custom">Home</a>
            <a href="/about" class="nav-link-custom">About</a>
            <a href="/services" class="nav-link-custom">Services</a>
            <a href="/barbers" class="nav-link-custom">Barbers</a>
            <a href="/gallery" class="nav-link-custom">Gallery</a>
            <a href="/contact" class="nav-link-custom">Contact</a>
        </div>
    </div>
</nav>

<div class="container section">
    @yield('content')
</div>

<footer class="text-center py-4">
    © {{ date('Y') }} Barber Juragan. All Rights Reserved.
</footer>

</body>
</html>