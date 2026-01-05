@extends('layouts.public')

@section('title', 'Welcome to Crane Academy')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="hero">
    <img src="/images/school/front.jpg" alt="Crane Academy School Front" loading="lazy" class="hero-img">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1 class="hero-title reveal" data-animate="fade-up" data-delay="0.05">
            {{ config('school.name') }}
        </h1>
        <p class="hero-sub reveal" data-animate="fade-up" data-delay="0.18">
            A {{ config('school.type') }} in {{ config('school.location.full') }} offering education from Play Group to Junior Secondary.
        </p>

        <div class="hero-cta">
            <a href="{{ route('contact') }}" class="btn btn-primary reveal" data-animate="scale-up" data-delay="0.32">Contact Us</a>
            <a href="tel:+254700000000" class="btn btn-secondary reveal" data-animate="scale-up" data-delay="0.4">Call Us</a>
        </div>
    </div>
</section>

{{-- ================= VALUE INTRO ================= --}}
<section class="intro">
    <div class="container intro-inner">
        <h2 class="section-title">A nurturing learning environment</h2>
        <p class="section-sub">Crane Academy provides a supportive and structured environment where learners grow academically, socially, and morally.</p>
    </div>

    {{-- Decorative elements --}}
    <div class="decor decor-1"></div>
    <div class="decor decor-2"></div>
</section>

{{-- ================= WHY PARENTS CHOOSE US ================= --}}
<section class="why">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">Why Parents Choose Us</h2>

        <div class="cards">
            <article class="card reveal" data-animate="scale-up" data-delay="0.12">
                <h3 class="card-title">Quality Education</h3>
                <p class="card-body">Experienced teachers and a curriculum that balances academics and life skills.</p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.18">
                <h3 class="card-title">Safe Environment</h3>
                <p class="card-body">A secure campus and attentive staff ensure learners are safe and supported.</p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.24">
                <h3 class="card-title">Holistic Growth</h3>
                <p class="card-body">Sports, arts, and co-curricular activities nurture well-rounded development.</p>
            </article>
        </div>
    </div>
</section>

{{-- ================= FACILITIES / ENVIRONMENT ================= --}}
<section class="features">
    <div class="container grid-3">
        <div class="feature reveal" data-animate="slide-left" data-delay="0.12">
            <img src="/images/playground.jpg" alt="Classrooms" loading="lazy" class="feature-img">
            <h3 class="feature-title">Modern Classrooms</h3>
            <p class="feature-body">Bright and spacious classrooms designed for effective learning.</p>
        </div>

        <div class="feature reveal" data-animate="slide-left" data-delay="0.18">
            <img src="/images/school/playground.jpg" alt="Playground" loading="lazy" class="feature-img">
            <h3 class="feature-title">Safe Play Areas</h3>
            <p class="feature-body">Outdoor spaces where children play, interact, and grow.</p>
        </div>

        <div class="feature reveal" data-animate="slide-left" data-delay="0.24">
            <img src="/images/school/staff.jpg" alt="Staff" loading="lazy" class="feature-img">
            <h3 class="feature-title">Dedicated Staff</h3>
            <p class="feature-body">Committed teachers focused on nurturing each learner’s potential.</p>
        </div>
    </div>
</section>

{{-- ================= VISIT ================= --}}
<section class="visit">
    <div class="container text-center">
        <h2 class="section-title">Visit Us</h2>
        <p class="mb-6">Crane Academy is located near Kitale Airport, Kitale, Kenya.</p>

        <a href="https://www.google.com/maps?q=The+Crane+Academy+Kitale" target="_blank" class="btn btn-primary">View on Google Maps</a>
    </div>
</section>

@endsection
