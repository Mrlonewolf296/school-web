<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}"> <!-- simple, works from public/ -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <!-- optionally: <link rel="icon" href="{{ asset('favicon.ico') }}?v=2"> to force refresh -->
    <title>@yield('title', 'CRANE ACADEMY')</title>
    {{-- Vite asset compilation for CSS and JavaScript --}} 
    <!-- Mark page as JS-capable early so reveal elements are hidden only when JS runs -->
    <script>document.documentElement.classList.add('js');</script> 
</head>
<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <!-- CDN axios for simple XHR usage (used by app JS) -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
