<nav class="site-nav">
    <div class="container nav-inner">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="site-logo">THE CRANE ACADEMY</a>

        <!-- Menu -->
        <ul class="nav-menu" role="menubar">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('staff') }}" class="nav-link">Staff</a>  </li>
            <li><a href="{{ route('admissions') }}" class="nav-link">Admissions</a></li>
            <li><a href="{{ route('academics') }}" class="nav-link">Academics</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
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
        <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
        <li><a href="{{ route('staff') }}" class="nav-link">Staff</a></li>
        <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        <li><a href="{{ route('admissions') }}" class="nav-link">Admissions</a></li>
        <li><a href="{{ route('academics') }}" class="nav-link">Academics</a></li>
    </ul>
</nav>

<script>
    (function () {
        function closeMenu(btn, menu) {
            if (!menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
                document.documentElement.classList.remove('no-scroll');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            var btn = document.getElementById('mobile-menu-btn');
            var menu = document.getElementById('mobile-menu');
            if (!btn || !menu) return;

            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                menu.classList.toggle('hidden');
                var expanded = menu.classList.contains('hidden') ? 'false' : 'true';
                btn.setAttribute('aria-expanded', expanded);
                // prevent body scroll when menu open
                if (expanded === 'true') document.documentElement.classList.add('no-scroll');
                else document.documentElement.classList.remove('no-scroll');
            });

            // Close on Escape
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeMenu(btn, menu);
            });

            // Close when clicking outside the menu
            document.addEventListener('click', function (e) {
                if (!menu.classList.contains('hidden') && !menu.contains(e.target) && !btn.contains(e.target)) {
                    closeMenu(btn, menu);
                }
            });
        });
    })();
</script>
