<footer class="bg-gray-800 text-gray-200 py-8">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
        <div>
            <h3 class="font-bold text-lg mb-2">CRANE ACADEMY</h3>
            <p>Providing quality education and a nurturing environment for your child.</p>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Quick Links</h3>
            <ul class="space-y-1">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                <li><a href="#" class="hover:text-white transition">Admissions</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Contact Us</h3>
            <p>Phone: +254 700 000000</p>
            <p>Email: info@craneacademy.com</p>
            <p>Address: 123 School Avenue, Your City</p>
        </div>
    </div>

    <div class="mt-8 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} CRANE ACADEMY. All rights reserved.
    </div>
</footer>
