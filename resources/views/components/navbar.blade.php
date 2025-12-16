<nav class="bg-white shadow-md px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">THE CRANE ACADEMY</a>

        <!-- Menu -->
        <ul class="hidden md:flex gap-6 items-center text-gray-700 font-medium">
            <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-blue-600 transition">Contact</a></li>
            <li><a href="{{ route('admissions') }}" class="hover:text-blue-600 transition">Admissions</a></li>
            <li><a href="{{ route('academics') }}" class="hover:text-blue-600 transition">Academics</a></li>
        </ul>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="mobile-menu-btn" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <ul id="mobile-menu" class="hidden flex-col gap-4 mt-4 md:hidden px-6 text-gray-700 font-medium">
        <li><a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-blue-600 transition">Contact</a></li>
        <li><a href="{{ route('admissions') }}" class="hover:text-blue-600 transition">Admissions</a></li>
        <li><a href="{{ route('academics') }}" class="hover:text-blue-600 transition">Academics</a></li>
    </ul>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
