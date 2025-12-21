@extends('layouts.public')

@section('title', 'Welcome to Crane Academy')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="relative min-h-screen flex items-center justify-center text-center">
    <img
        src="/images/school/front.jpg"
        alt="Crane Academy School Front"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-3xl px-6 text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
            {{ config('school.name') }}
        </h1>

        <p class="text-lg md:text-xl mb-8 text-gray-200">
            A {{ config('school.type') }} in {{ config('school.location.full') }}
            offering education from Play Group to Junior Secondary.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}"
               class="bg-blue-600 px-8 py-3 rounded-md font-semibold hover:bg-blue-700 transition">
                Contact Us
            </a>

            <a href="tel:+254700000000"
               class="bg-white text-gray-900 px-8 py-3 rounded-md font-semibold hover:bg-gray-200 transition">
                Call Us
            </a>
        </div>
    </div>
</section>

{{-- ================= VALUE INTRO ================= --}}
<section class="relative bg-blue-50 py-24 text-center px-6 overflow-hidden reveal opacity-0">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">
            A nurturing learning environment
        </h2>

        <p class="text-lg text-gray-700">
            Crane Academy provides a supportive and structured environment where
            learners grow academically, socially, and morally.
        </p>
    </div>

    {{-- Decorative elements --}}
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-200 rounded-full opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-300 rounded-full opacity-20 translate-x-1/3 translate-y-1/4"></div>
</section>

{{-- ================= WHY PARENTS CHOOSE US ================= --}}
<section class="py-20 px-6 bg-white">
    <h2 class="text-3xl font-semibold text-center mb-12">
        Why Parents Choose Us
    </h2>

    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Quality Education</h3>
            <p class="text-gray-700">
                Experienced teachers and a curriculum that balances academics and life skills.
            </p>
        </div>

        <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Safe Environment</h3>
            <p class="text-gray-700">
                A secure campus and attentive staff ensure learners are safe and supported.
            </p>
        </div>

        <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Holistic Growth</h3>
            <p class="text-gray-700">
                Sports, arts, and co-curricular activities nurture well-rounded development.
            </p>
        </div>
    </div>
</section>

{{-- ================= FACILITIES / ENVIRONMENT ================= --}}
<section class="py-20 bg-gradient-to-r from-blue-100 to-blue-50 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/classrooms.jpg" alt="Classrooms" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Modern Classrooms</h3>
            <p class="text-gray-600 text-sm">
                Bright and spacious classrooms designed for effective learning.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/playground.jpg" alt="Playground" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Safe Play Areas</h3>
            <p class="text-gray-600 text-sm">
                Outdoor spaces where children play, interact, and grow.
            </p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 text-center hover:scale-105 transition-transform">
            <img src="/images/school/staff.jpg" alt="Staff" class="rounded mb-4">
            <h3 class="text-xl font-semibold mb-2">Dedicated Staff</h3>
            <p class="text-gray-600 text-sm">
                Committed teachers focused on nurturing each learner’s potential.
            </p>
        </div>
    </div>
</section>

{{-- ================= VISIT ================= --}}
<section class="bg-blue-50 py-16 px-6 text-center">
    <h2 class="text-3xl font-semibold mb-4">Visit Us</h2>

    <p class="mb-6 text-gray-700">
        Crane Academy is located near Kitale Airport, Kitale, Kenya.
    </p>

    <a href="https://www.google.com/maps?q=The+Crane+Academy+Kitale"
       target="_blank"
       class="inline-block bg-blue-600 text-white px-8 py-3 rounded-md hover:bg-blue-700 transition">
        View on Google Maps
    </a>
</section>

@endsection
