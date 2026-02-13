<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>
<body class="flex min-h-screen bg-gray-100">

    <aside class="w-64 bg-white shadow-md p-5">
        <h2 class="text-xl font-bold mb-6">Admin Panel</h2>

        <ul class="space-y-3">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.staff.index') }}">Staff</a></li>
            <li><a href="{{ route('admin.inquiries.index') }}">Inquiries</a></li>

            <li class="text-gray-400">Students (Coming Soon)</li>
            <li class="text-gray-400">Fees (Coming Soon)</li>
            <li class="text-gray-400">Reports (Coming Soon)</li>
            <li class="text-gray-400">Settings (Coming Soon)</li>
        </ul>
    </aside>

    <main class="flex-1 p-8">
        @yield('content')
    </main>

</body>
</html>
