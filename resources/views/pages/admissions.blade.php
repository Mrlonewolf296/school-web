@extends('layouts.public')

@section('content')

<!-- Hero -->
<section class="hero-plain hero-admissions">
    <div class="container">
        <h1 class="page-title reveal" data-animate="fade-up">
            Admissions at {{ config('school.name') }}
        </h1>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            Begin your child’s journey in a structured, faith-based, and academically focused learning environment.
        </p>
    </div>
</section>

<!-- Who Can Apply -->
<section class="who-can-apply">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Who Can Apply
        </h2>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            We welcome applications for learners in the following levels:
        </p>

        <div class="levels-grid">
            @foreach(config('school.levels') as $level)
                <div class="level-card reveal"
                     data-animate="scale-up"
                     data-delay="{{ $loop->index * 0.08 }}">
                    {{ $level }}
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Admission Process -->
<section class="admission-process">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">
            Admission Process
        </h2>

        <div class="steps-grid">

            <div class="step reveal" data-animate="fade-up" data-delay="0.06">
                <div class="step-number">1</div>
                <p>Contact the school or visit our campus to receive detailed admission guidance.</p>
            </div>

            <div class="step reveal" data-animate="fade-up" data-delay="0.12">
                <div class="step-number">2</div>
                <p>Complete and submit the official admission application form.</p>
            </div>

            <div class="step reveal" data-animate="fade-up" data-delay="0.18">
                <div class="step-number">3</div>
                <p>Academic assessment and placement (for applicable levels).</p>
            </div>

            <div class="step reveal" data-animate="fade-up" data-delay="0.24">
                <div class="step-number">4</div>
                <p>Receive admission confirmation and complete enrollment formalities.</p>
            </div>

        </div>
    </div>
</section>

<!-- Requirements -->
<section class="requirements">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Required Documents
        </h2>

        <ul class="requirements-list reveal" data-animate="fade-up" data-delay="0.06">
            <li>Copy of the learner’s birth certificate</li>
            <li>Previous school academic report (if applicable)</li>
            <li>Transfer letter from previous school (if applicable)</li>
            <li>Passport-size photographs</li>
        </ul>
    </div>
</section>

<!-- Admission Availability -->
<section class="availability">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Admission Availability
        </h2>

        <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
            Admissions are open subject to available space in each class. Early applications are encouraged to secure placement.
        </p>
    </div>
</section>

<!-- Call to Action -->
<section class="cta secondary-cta">
    <div class="container text-center">
        <h2 class="section-title reveal" data-animate="fade-up">
            Ready to Begin?
        </h2>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            Contact our admissions office today to receive full enrollment details and guidance.
        </p>

        <a href="{{ route('contact') }}"
           class="btn btn-primary reveal"
           data-animate="scale-up"
           data-delay="0.12">
            Contact Admissions
        </a>
    </div>
</section>

@endsection
