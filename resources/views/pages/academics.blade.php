@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="bg-blue-700 text-white py-20 text-center">
    <div class="max-w-4xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Our Academic Program
        </h1>
        <p class="text-lg opacity-90">
            A strong academic foundation from early childhood to junior secondary.
        </p>
    </div>
</section>

<!-- Academic Philosophy -->
<section class="py-16 bg-white reveal opacity -0">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Our Approach to Learning</h2>
        <p class="text-gray-700 leading-relaxed">
            At Crane Academy, we believe that every child learns best in a structured,
            supportive, and engaging environment. Our academic program is designed
            to nurture curiosity, build strong foundational skills, and prepare learners
            for the next stage of their education.
        </p>
    </div>
</section>

<!-- Academic Levels -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">
            Academic Levels Offered
        </h2>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Play Group -->
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">Play Group</h3>
                <p class="text-gray-700">
                    Focused on early childhood development through play-based learning,
                    social interaction, and basic motor skills.
                </p>
            </div>

            <!-- Pre-Primary -->
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">Pre-Primary</h3>
                <p class="text-gray-700">
                    Builds early literacy, numeracy, and communication skills while
                    nurturing confidence and independence.
                </p>
            </div>

            <!-- Primary -->
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">Primary School</h3>
                <p class="text-gray-700">
                    A structured curriculum focusing on core subjects, critical thinking,
                    discipline, and holistic development.
                </p>
            </div>

            <!-- Junior Secondary -->
            <div class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-xl font-bold mb-3">Junior Secondary</h3>
                <p class="text-gray-700">
                    Prepares learners for higher academic challenges by strengthening
                    subject mastery, responsibility, and independent learning.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-blue-50 text-center">
    <h2 class="text-3xl font-bold mb-4">
        Want to Learn More About Our Academics?
    </h2>
    <p class="text-gray-700 mb-6">
        Contact us today for detailed curriculum information and enrollment guidance.
    </p>

    <a href="{{ route('contact') }}"
       class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
        Contact the School
    </a>
</section>

@endsection
