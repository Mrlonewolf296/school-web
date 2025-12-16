@extends('layouts.public')

@section('title', 'Welcome to CRANE ACADEMY')

@section('content')
<section class="relative bg-blue-50 min-h-screen flex flex-col justify-center items-center text-center px-6 md:px-0 overflow-hidden">
    <!-- Decorative background circles -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-300 rounded-full opacity-20 translate-x-1/3 translate-y-1/4"></div>

    <!-- Hero Content -->
    <h1 class="text-3xl md:text-5xl font-extrabold mb-4 text-gray-900">
        Welcome to THE CRANE ACADEMY
    </h1>
    <p class="text-lg md:text-xl mb-8 text-gray-700 max-w-2xl">
        A nurturing environment for every child to thrive academically and socially.
    </p>

    <!-- Call to Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="{{ route('contact') }}"
           class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold shadow hover:bg-blue-700 hover:scale-105 transition transform duration-300">
           Contact Us
        </a>
        <a href="tel:+254700000000"
           class="bg-gray-200 px-8 py-3 rounded-lg font-semibold shadow hover:bg-gray-300 hover:scale-105 transition transform duration-300">
           Call Us
        </a>
    </div>
</section>


<section class="relative min-h-screen flex items-center justify-center text-center">
   <!-- <h1 class="text-3xl sm:text-5xl font-bold mb-4">m -->
    <img src="/images/school/front.jpg"
         alt="Crane Academy School Front"
         class="absolute inset-0 w-full h-full object-cover">

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 text-white max-w-3xl px-6">
        <h1 class="text-5xl font-bold mb-4">
            {{ config('school.name') }}
        </h1>

        <p class="text-lg mb-6">
            A {{ config('school.type') }} in {{ config('school.location.full') }}
            offering education from Play Group to Junior Secondary.
        </p>

        <a href="{{ route('contact') }}"
           class="inline-block bg-blue-600 px-8 py-3 rounded hover:bg-blue-700 transition">
            Visit or Enquire
        </a>
    </div>
</section>

<section class="relative py-20 bg-gradient-to-r from-blue-100 to-blue-50 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8 items-center">   
        <!-- Decoration 1 -->
        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/classrooms.jpg" alt="Classrooms" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Modern Classrooms</h3>
            <p class="text-gray-600 text-sm">Bright and spacious classrooms designed for effective learning.</p>
        </div>

        <!-- Decoration 2 -->
        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/playground.jpg" alt="Playground" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Safe Play Areas</h3>
            <p class="text-gray-600 text-sm">Outdoor playgrounds where children can play and develop social skills.</p>
        </div>

        <!-- Decoration 3 -->
        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/staff.jpg" alt="Staff" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Dedicated Staff</h3>
            <p class="text-gray-600 text-sm">Experienced teachers committed to nurturing your child’s potential.</p>
        </div>

    </div>

    <!-- Optional subtle background decorations -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-300 rounded-full opacity-30 translate-x-1/3 translate-y-1/4"></div>
</section>


<section class="py-12 px-6">
    <h2 class="text-3xl font-semibold text-center mb-8">Why Parents Choose Us</h2>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Quality Education</h3>
            <p>Experienced teachers and a curriculum that balances academics and life skills.</p>
        </div>
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Safe Environment</h3>
            <p>Secure campus and attentive staff ensure students are safe and happy.</p>
        </div>
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Holistic Growth</h3>
            <p>Sports, arts, and clubs foster creativity and teamwork alongside learning.</p>
        </div>
    </div>
</section>

<section class="bg-blue-50 py-12 px-6">
    <h2 class="text-3xl font-semibold text-center mb-8">Visit Us</h2>
    <p class="text-center mb-4">The Crane Academy near Kitale airport, Kitale, Kenya</p>
    <div class="flex justify-center">
        <iframe class="w-full md:w-2/3 h-64 rounded shadow" 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d849.2707214940768!2d34.9597592!3d0.9798036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17818997d4f2a8ed%3A0xf2b6d188381afb8d!2sTHE%20CRANE%20ACADEMY%20PRIMARY%20SCHOOL!5e1!3m2!1ssw!2ske!4v1765897150199!5m2!1ssw!2ske"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection
