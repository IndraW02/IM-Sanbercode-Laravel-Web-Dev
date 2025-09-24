<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SanberBook')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fff;
            color: #212529;
        }
        .navbar {
            border-bottom: 2px solid #000;
            background-color: #fff !important;
            padding: 1rem 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #000 !important;
        }
        .nav-link {
            color: #000 !important;
            font-weight: 500;
            margin: 0 10px;
        }
        .nav-link.active {
            color: #28a745 !important;
        }
        .page-title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin: 3rem 0 1.5rem;
            position: relative;
        }
        .page-title::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #28a745;
            margin: 10px auto;
        }
        .container {
            max-width: 800px;
            padding: 2rem;
        }
        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
            font-size: 0.85rem;
            margin-top: 3rem;
        }
        footer a {
            color: #28a745;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">COMPANY.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ url('/register') }}">REGISTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        &copy; Copyright <strong>Company</strong>. All Rights Reserved<br>
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>