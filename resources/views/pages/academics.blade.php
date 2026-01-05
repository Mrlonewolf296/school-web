@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero-plain">
    <div class="container">
        <h1 class="page-title reveal" data-animate="fade-up">Our Academic Program</h1>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">A strong academic foundation from early childhood to junior secondary.</p>
    </div>
</section>

<!-- Academic Philosophy -->
<section class="philosophy">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">Our Approach to Learning</h2>
        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">At Crane Academy, we believe that every child learns best in a structured, supportive, and engaging environment. Our academic program is designed to nurture curiosity, build strong foundational skills, and prepare learners for the next stage of their education.</p>
    </div>
</section>

<!-- Academic Levels -->
<section class="levels-section">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">Academic Levels Offered</h2>

        <div class="cards">
            <article class="card reveal" data-animate="scale-up" data-delay="0.08">
                <h3 class="card-title">Play Group</h3>
                <p class="card-body">Focused on early childhood development through play-based learning, social interaction, and basic motor skills.</p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.12">
                <h3 class="card-title">Pre-Primary</h3>
                <p class="card-body">Builds early literacy, numeracy, and communication skills while nurturing confidence and independence.</p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.16">
                <h3 class="card-title">Primary School</h3>
                <p class="card-body">A structured curriculum focusing on core subjects, critical thinking, discipline, and holistic development.</p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.2">
                <h3 class="card-title">Junior Secondary</h3>
                <p class="card-body">Prepares learners for higher academic challenges by strengthening subject mastery, responsibility, and independent learning.</p>
            </article>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta secondary-cta">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">Want to Learn More About Our Academics?</h2>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">Contact us today for detailed curriculum information and enrollment guidance.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary reveal" data-animate="scale-up" data-delay="0.12">Contact the School</a>
    </div>
</section>

@endsection
