<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('front.home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('front.about') }}" class="nav-link">About</a></li>
                <li><a href="{{ route('front.contact') }}" class="nav-link">Contact</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Category One</a></li>
                        <li><a href="" class="dropdown-item">Category Two</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav>
    @yield('body')
    <footer class="py-3 bg-dark text-muted">
        <p class="text-center">OTMS Mafuzur Rahman &copy; | All Right Reserved. </p>
    </footer>
<script src="{{ asset('/') }}front/js/bootstrap.bundle.js"></script>
</body>
</html>
