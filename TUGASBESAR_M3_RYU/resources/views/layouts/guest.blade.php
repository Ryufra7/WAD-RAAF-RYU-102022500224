<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data Kos')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ filemtime(public_path('style.css')) }}">
</head>
<body>
    <div class="container narrow">
        @yield('content')
    </div>
</body>
</html>