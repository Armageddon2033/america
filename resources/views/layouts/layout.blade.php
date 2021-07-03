<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>America</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sticky-footer-navbar.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">America</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('presidents.index') }}">Presidents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parties.index') }}">Parties</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('states.index') }}" >States</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">&copy; America 2021 - All rights reserved</span>
    </div>
</footer>
</body>
</html>
