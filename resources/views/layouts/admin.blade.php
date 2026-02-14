<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <style>
        body { display: flex; background: #f8fafc; }
        .admin-sidebar { width: 16rem; background: #fff; box-shadow: 0 1px 6px rgba(0,0,0,0.08); padding: 1.5rem; }
        .admin-sidebar h2 { font-size: 1.25rem; font-weight: 700; margin-bottom: 1.5rem; color: #111827; }
        .admin-nav { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 0.75rem; }
        .admin-nav li { margin: 0; }
        .admin-nav a { padding: 0.75rem 1rem; border-radius: 0.375rem; text-decoration: none; color: #374151; font-weight: 500; display: block; transition: all 150ms; }
        .admin-nav a:hover { background: #eff6ff; color: #2563eb; }
        .admin-nav .coming-soon { color: #9ca3af; padding: 0.75rem 1rem; }
        .admin-main { flex: 1; padding: 2rem; }
    </style>
</head>
<body>
    <aside class="admin-sidebar">
        <h2>Admin Panel</h2>
        <ul class="admin-nav">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="coming-soon">Staff (Coming Soon)</li>
            <li class="coming-soon">Inquiries (Coming Soon)</li>
            <li class="coming-soon">Students (Coming Soon)</li>
            <li class="coming-soon">Fees (Coming Soon)</li>
            <li class="coming-soon">Reports (Coming Soon)</li>
            <li class="coming-soon">Settings (Coming Soon)</li>
        </ul>
    </aside>

    <main class="admin-main">
        @yield('content')
    </main>
</body>
</html>
