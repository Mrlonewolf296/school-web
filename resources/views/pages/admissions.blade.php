@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="bg-blue-600 text-white py-20 text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Admissions at {{ config('school.name') }}
        </h1>
        <p class="text-lg opacity-90">
            Join a nurturing environment where your child grows academically and socially.
        </p>
    </div>
</section>

<!-- Who Can Apply -->
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-6">Who Can Apply</h2>

        <p class="text-gray-700 mb-10">
            We admit learners across the following levels:
        </p>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach(config('school.levels') as $level)
                <div class="bg-white rounded-xl shadow p-6 font-semibold">
                    {{ $level }}
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-10">
            Admission Process
        </h2>

        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl font-bold text-blue-600 mb-2">1</div>
                <p>Contact the school or visit us for inquiries.</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-blue-600 mb-2">2</div>
                <p>Collect and fill in the admission form.</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-blue-600 mb-2">3</div>
                <p>Assessment and placement (where applicable).</p>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-blue-600 mb-2">4</div>
                <p>Confirmation and enrollment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-blue-50 text-center">
    <h2 class="text-3xl font-bold mb-4">
        Ready to Get Started?
    </h2>
    <p class="text-gray-700 mb-6">
        Contact us today to begin your child’s admission journey.
    </p>

    <a href="{{ route('contact') }}"
       class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
        Contact Admissions
    </a>
</section>

@endsection
