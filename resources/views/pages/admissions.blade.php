@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero-plain hero-admissions">
    <div class="container">
        <h1 class="page-title reveal" data-animate="fade-up">Admissions at {{ config('school.name') }}</h1>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">Join a nurturing environment where your child grows academically and socially.</p>
    </div>
</section>

<!-- Who Can Apply -->
<section class="who-can-apply">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">Who Can Apply</h2>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">We admit learners across the following levels:</p>

        <div class="levels-grid">
            @foreach(config('school.levels') as $level)
                <div class="level-card reveal" data-animate="scale-up" data-delay="{{ $loop->index * 0.08 }}">{{ $level }}</div>
            @endforeach
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="admission-process">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">Admission Process</h2>

        <div class="steps-grid">
            <div class="step reveal" data-animate="fade-up" data-delay="0.06">
                <div class="step-number">1</div>
                <p>Contact the school or visit us for inquiries.</p>
            </div>
            <div class="step reveal" data-animate="fade-up" data-delay="0.12">
                <div class="step-number">2</div>
                <p>Collect and fill in the admission form.</p>
            </div>
            <div class="step reveal" data-animate="fade-up" data-delay="0.18">
                <div class="step-number">3</div>
                <p>Assessment and placement (where applicable).</p>
            </div>
            <div class="step reveal" data-animate="fade-up" data-delay="0.24">
                <div class="step-number">4</div>
                <p>Confirmation and enrollment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta secondary-cta">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">Ready to Get Started?</h2>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">Contact us today to begin your child’s admission journey.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal" data-animate="scale-up" data-delay="0.12">Contact Admissions</a>
    </div>
</section>

@endsection
