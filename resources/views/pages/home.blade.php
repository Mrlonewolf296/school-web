@extends('layouts.public')

@section('title', 'Welcome to Crane Academy')

@section('content')

{{-- ================= HERO SECTION ================= --}}
<section class="hero">
    <img src="/images/school/front.jpg" alt="Crane Academy School Front" loading="lazy" class="hero-img">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1 class="hero-title reveal" data-animate="fade-up" data-delay="0.05">
            Shaping Confident, Disciplined & Academically Strong Learners
        </h1>

        <p class="hero-sub reveal" data-animate="fade-up" data-delay="0.18">
            Located near Kitale Airport, Crane Academy offers quality education 
            from Play Group to Junior Secondary in a safe and nurturing environment.
        </p>

        <div class="hero-cta">
            <a href="{{ route('contact') }}" 
               class="btn btn-primary reveal" 
               data-animate="scale-up" 
               data-delay="0.32">
                Book a School Visit
            </a>

            <a href="tel:+254700000000" 
               class="btn btn-secondary reveal" 
               data-animate="scale-up" 
               data-delay="0.4">
                Call Admissions
            </a>
        </div>
    </div>
</section>

{{-- ================= INTRO ================= --}}
<section class="intro">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            A School Where Every Child Matters
        </h2>

        <p class="section-sub reveal" data-animate="fade-up" data-delay="0.15">
            At Crane Academy, we combine strong academic foundations, discipline, 
            and holistic development to help every learner grow intellectually, 
            socially, and morally.
        </p>
    </div>
</section>

{{-- ================= WHY CHOOSE US ================= --}}
<section class="why">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">
            Why Parents Choose Crane Academy
        </h2>

        <div class="cards">
            <article class="card reveal" data-animate="scale-up" data-delay="0.12">
                <h3 class="card-title">Strong Academic Foundation</h3>
                <p class="card-body">
                    CBC-aligned curriculum delivered by experienced teachers 
                    focused on individual learner progress and performance.
                </p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.2">
                <h3 class="card-title">Safe & Secure Environment</h3>
                <p class="card-body">
                    Controlled entry points, attentive staff, and a structured 
                    environment that ensures safety and discipline.
                </p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.28">
                <h3 class="card-title">Holistic Development</h3>
                <p class="card-body">
                    Sports, arts, leadership activities, and co-curricular programs 
                    that nurture well-rounded learners.
                </p>
            </article>
        </div>
    </div>
</section>

{{-- ================= ACADEMIC LEVELS ================= --}}
<section class="levels">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Our Academic Levels
        </h2>

        <div class="grid-4">
            <div class="level reveal" data-animate="slide-left" data-delay="0.1">
                <h3>Play Group</h3>
                <p>Early childhood development in a caring and engaging environment.</p>
            </div>

            <div class="level reveal" data-animate="slide-left" data-delay="0.18">
                <h3>Pre-Primary</h3>
                <p>Building literacy, numeracy, and social confidence foundations.</p>
            </div>

            <div class="level reveal" data-animate="slide-left" data-delay="0.26">
                <h3>Primary School</h3>
                <p>Strong academic preparation with continuous assessment and growth.</p>
            </div>

            <div class="level reveal" data-animate="slide-left" data-delay="0.34">
                <h3>Junior Secondary</h3>
                <p>Structured learning focused on discipline, leadership, and academic excellence.</p>
            </div>
        </div>
    </div>
</section>

{{-- ================= FACILITIES ================= --}}
<section class="features">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">
            Our World-Class Facilities
        </h2>
        <div class="grid-3">
        <div class="feature reveal" data-animate="slide-right" data-delay="0.12">
            <img src="/images/school/front2.jpg" alt="Modern Classrooms" loading="lazy" class="feature-img">
            <h3 class="feature-title">Modern Classrooms</h3>
            <p class="feature-body">
                Bright, spacious classrooms designed for effective and focused learning.
            </p>
        </div>

        <div class="feature reveal" data-animate="slide-right" data-delay="0.2">
            <img src="/images/school/playground.jpg" alt="Safe Playground" loading="lazy" class="feature-img">
            <h3 class="feature-title">Safe Play Areas</h3>
            <p class="feature-body">
                Clean and secure outdoor spaces where children play, interact, and grow.
            </p>
        </div>

        <div class="feature reveal" data-animate="slide-right" data-delay="0.28">
            <img src="/images/school/staff.jpg" alt="Dedicated Staff" loading="lazy" class="feature-img">
            <h3 class="feature-title">Dedicated Teachers</h3>
            <p class="feature-body">
                Passionate educators committed to guiding each learner to their full potential.
            </p>
        </div>

        </div>
    </div>
</section>

{{-- ================= TESTIMONIALS ================= --}}
<section class="testimonials">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            What Parents Say
        </h2>

        <div class="testimonial-grid">
            <div class="testimonial reveal" data-animate="fade-up" data-delay="0.12">
                <p class="testimonial-text">
                    “Since joining Crane Academy, my son has become more confident 
                    and disciplined. His academic performance has improved greatly.”
                </p>
                <span class="testimonial-author">— Parent, Grade 4</span>
            </div>

            <div class="testimonial reveal" data-animate="fade-up" data-delay="0.2">
                <p class="testimonial-text">
                    “The teachers are caring and attentive. I feel comfortable 
                    knowing my child is in a safe and supportive environment.”
                </p>
                <span class="testimonial-author">— Parent, PP2</span>
            </div>

            <div class="testimonial reveal" data-animate="fade-up" data-delay="0.28">
                <p class="testimonial-text">
                    “Crane Academy balances discipline and academics very well. 
                    My daughter enjoys school and continues to excel each term.”
                </p>
                <span class="testimonial-author">— Parent, Junior Secondary</span>
            </div>
        </div>
    </div>
</section>

{{-- ================= FINAL CTA ================= --}}
<section class="cta">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Admissions Ongoing
        </h2>

        <p class="reveal" data-animate="fade-up" data-delay="0.15">
            Limited spaces available. Book a visit today and experience Crane Academy firsthand.
        </p>

        <div class="hero-cta">
            <a href="{{ route('contact') }}" 
               class="btn btn-primary reveal" 
               data-animate="scale-up" 
               data-delay="0.3">
                Schedule a Visit
            </a>

            <a href="tel:+254700000000" 
               class="btn btn-secondary reveal" 
               data-animate="scale-up" 
               data-delay="0.38">
                Call Now
            </a>
        </div>
    </div>
</section>

@endsection
