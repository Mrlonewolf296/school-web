@extends('layouts.public')

@section('content')

<!-- Hero -->
<section class="hero-plain hero-staff">
    <div class="container text-center">
        <h1 class="page-title reveal" data-animate="fade-up">Meet Our Staff</h1>
        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">
            Our experienced and faith-based team ensures academic excellence and character development.
        </p>
    </div>
</section>

{{-- ================= LEADERSHIP ================= --}}
@if($leadership->count())
<section class="leadership-section">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">School Leadership</h2>

        <div class="cards leadership-cards">
            @foreach($leadership as $member)
            <article class="card reveal" data-animate="scale-up" data-delay="{{ $loop->index * 0.08 }}">
                <div class="card-image">
                    <img src="{{ $member->photo ? asset('storage/' . $member->photo) : asset('/images/school/staff.jpg') }}" 
                         alt="{{ $member->first_name }} {{ $member->last_name }}" 
                         loading="lazy">
                </div>
                <div class="card-content">
                    <h3 class="card-title">{{ $member->first_name }} {{ $member->last_name }}</h3>
                    <p class="card-position">{{ $member->position }}</p>
                    <p class="card-bio">{{ $member->bio }}</p>
                    @if($member->qualifications)
                        <p class="card-qualifications"><strong>Qualifications:</strong> {{ $member->qualifications }}</p>
                    @endif
                    @if($member->years_of_experience)
                        <p class="card-experience"><strong>Experience:</strong> {{ $member->years_of_experience }} years</p>
                    @endif
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- ================= TEACHERS ================= --}}
@if($teachers->count())
<section class="teachers-section">
    <div class="container">
        <h2 class="section-title centered reveal" data-animate="fade-up">Our Teaching Staff</h2>

        <div class="cards teachers-cards">
            @foreach($teachers as $member)
            <article class="card reveal" data-animate="scale-up" data-delay="{{ $loop->index * 0.06 }}">
                <div class="card-image">
                    <img src="{{ $member->photo ? asset('storage/' . $member->photo) : asset('/images/school/staff.jpg') }}" 
                         alt="{{ $member->first_name }} {{ $member->last_name }}" 
                         loading="lazy">
                </div>
                <div class="card-content">
                    <h3 class="card-title">{{ $member->first_name }} {{ $member->last_name }}</h3>
                    <p class="card-position">{{ $member->position }}</p>
                    <p class="card-bio">{{ $member->bio }}</p>
                    @if($member->qualifications)
                        <p class="card-qualifications"><strong>Qualifications:</strong> {{ $member->qualifications }}</p>
                    @endif
                    @if($member->years_of_experience)
                        <p class="card-experience"><strong>Experience:</strong> {{ $member->years_of_experience }} years</p>
                    @endif
                </div>
            </article>
            @endforeach
        </div>
    </div>
    @if($teachers->count())
    <div class="text-center mt-6 reveal" data-animate="fade-up" data-delay="0.12">
        <a href="{{ route('staff.all') }}" class="btn btn-secondary">View All Staff</a>
    </div>
@endif

    
</section>
@endif

@endsection
