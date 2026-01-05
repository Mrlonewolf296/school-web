<nav class="site-nav">
    <div class="container nav-inner">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="site-logo">THE CRANE ACADEMY</a>

        <!-- Menu -->
        <ul class="nav-menu" role="menubar">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li><a href="{{ route('admissions') }}" class="nav-link">Admissions</a></li>
            <li><a href="{{ route('academics') }}" class="nav-link">Academics</a></li>
        </ul>

        <!-- Mobile menu button -->
        <div class="mobile-toggle">
            <button id="mobile-menu-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu" class="mobile-btn">
                <svg class="icon icon-menu" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <ul id="mobile-menu" class="mobile-menu hidden" role="menu">
        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        <li><a href="{{ route('admissions') }}" class="nav-link">Admissions</a></li>
        <li><a href="{{ route('academics') }}" class="nav-link">Academics</a></li>
    </ul>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        const expanded = menu.classList.contains('hidden') ? 'false' : 'true';
        btn.setAttribute('aria-expanded', expanded);
    });
</script>
