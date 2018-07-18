<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('message.title') }}</title>

    <!-- CSS And JavaScript -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <!-- Navbar Contents -->
    </nav>
</div>

@yield('content')
</body>
</html>
