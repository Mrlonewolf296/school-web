@extends('layouts.public')

@section('content')

<section class="staff-all-section">
    <div class="container">
        <h1 class="section-title centered reveal" data-animate="fade-up">All Staff Members</h1>

        <div class="cards staff-cards">
            @foreach($staff as $member)
            <article class="card reveal" data-animate="scale-up" data-delay="{{ $loop->index * 0.05 }}">
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

        <div class="mt-6 text-center">
            {{ $staff->links() }} <!-- pagination links -->
        </div>
    </div>
</section>

@endsection
