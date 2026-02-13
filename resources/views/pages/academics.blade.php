@extends('layouts.public')

@section('content')

<!-- Hero -->
<section class="hero-plain">
    <div class="container">
        <h1 class="page-title reveal" data-animate="fade-up">
            Our Academic Program
        </h1>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            A structured, CBC-aligned academic journey from early childhood to Junior Secondary.
        </p>
    </div>
</section>

<!-- Academic Philosophy -->
<section class="philosophy">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Our Approach to Learning
        </h2>

        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
            At Crane Academy, our academic program is guided by the Competency-Based Curriculum (CBC) and strengthened by structured discipline, continuous assessment, and strong moral guidance.
        </p>

        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.10">
            We focus on building strong literacy, numeracy, communication, and problem-solving skills while nurturing responsibility, confidence, and independent thinking.
        </p>
    </div>
</section>

<!-- Academic Levels -->
<section class="levels-section">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">
            Academic Levels Offered
        </h2>

        <div class="cards">

            <article class="card reveal" data-animate="scale-up" data-delay="0.08">
                <h3 class="card-title">Play Group</h3>
                <p class="card-body">
                    Focused on early childhood development through guided play, social interaction, and foundational motor skills within a safe and nurturing environment.
                </p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.12">
                <h3 class="card-title">Pre-Primary</h3>
                <p class="card-body">
                    Builds early literacy and numeracy competencies while strengthening communication, creativity, and independence in preparation for primary learning.
                </p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.16">
                <h3 class="card-title">Primary School</h3>
                <p class="card-body">
                    Delivers a structured CBC program emphasizing subject mastery, discipline, continuous assessment, and measurable academic progress.
                </p>
            </article>

            <article class="card reveal" data-animate="scale-up" data-delay="0.2">
                <h3 class="card-title">Junior Secondary</h3>
                <p class="card-body">
                    Prepares learners for higher academic expectations through deeper subject engagement, personal responsibility, leadership development, and consistent performance tracking.
                </p>
            </article>

        </div>
    </div>
</section>

<!-- Academic Assessment & Outcomes -->
<section class="assessment">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Assessment & Academic Growth
        </h2>

        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
            We implement continuous assessment strategies to monitor learner progress, identify strengths and areas for improvement, and provide timely academic support.
        </p>

        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.10">
            Through structured evaluation and consistent feedback, we ensure measurable academic growth at every stage of learning.
        </p>
    </div>
</section>

<!-- Call to Action -->
<section class="cta secondary-cta">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Want to Learn More About Our Academics?
        </h2>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            Contact us today for detailed curriculum information and enrollment guidance.
        </p>

        <a href="{{ route('contact') }}"
           class="btn btn-primary reveal"
           data-animate="scale-up"
           data-delay="0.12">
            Contact the School
        </a>
    </div>
</section>

@endsection
