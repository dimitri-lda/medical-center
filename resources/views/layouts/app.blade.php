<!DOCTYPE html>
<html>
<head>
    <title>Your App Title</title>
    <!-- Include Bootstrap CSS from a CDN -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
    <!-- Your header content goes here -->
</header>

<nav>
    <!-- Your navigation menu goes here -->
</nav>

<main>
    @yield('content')
</main>

<footer>
    <!-- Your footer content goes here -->
</footer>
</body>
</html>

