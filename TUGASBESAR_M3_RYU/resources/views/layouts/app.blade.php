<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data Kos')</title>

    {{-- ?v= membuat browser selalu memuat CSS terbaru setiap file diubah --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}?v={{ filemtime(public_path('style.css')) }}">
</head>
<body>
    @hasSection('fullpage')
        {{-- Halaman tanpa kotak container (dipakai dashboard) --}}
        @yield('fullpage')
    @else
        <div class="container @yield('container_class')">
            <h2>@yield('heading')</h2>

            @yield('content')
        </div>
    @endif
</body>
</html>