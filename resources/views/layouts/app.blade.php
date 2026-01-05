<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}"> <!-- simple, works from public/ -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('school.name') }}</title>
</head>
<body class="site-body">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Page content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <!-- CDN axios for simple XHR usage (used by app JS) -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
