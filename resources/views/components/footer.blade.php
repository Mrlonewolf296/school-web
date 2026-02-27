<footer class="site-footer">
    <div class="footer-inner container">
        <div class="footer-col">
            <h3 class="footer-title">THE CRANE ACADEMY</h3>
            <p class="footer-text">Providing quality education and a nurturing environment for your child.</p>
        </div>

        <div class="footer-col">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">Contact</a></li>
                <li><a href="#" class="footer-link">Admissions</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3 class="footer-title">Contact Us</h3>
            <p class="footer-text">Phone: {{ config('school.contact.phone') }}</p>
            <p class="footer-text">Email: {{ config('school.contact.email') }}</p>
            <p class="footer-text">Address: {{ config('school.location.full') }}</p>
        </div>
    </div>

    <div class="footer-bottom">
        &copy; {{ date('Y') }} THE CRANE ACADEMY. All rights reserved.
    </div>
</footer>
