@extends('layouts.public')

@section('title', 'About Us | Crane Academy')

@section('content')

{{-- ================= PAGE INTRO ================= --}}
<section class="hero-plain">
    <div class="container intro-inner">
        <h1 class="page-title reveal" data-animate="fade-up">
            About {{ config('school.name') }}
        </h1>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.08">
          Founded in {{ config('school.founded') }}, {{ config('school.name') }} is a faith-based...
        </p>
    </div>
</section>

{{-- ================= WHO WE ARE ================= --}}
<section class="identity">
    <div class="container two-col">
        <img src="/images/school/front.jpg"
             alt="Crane Academy School Building"
             loading="lazy"
             class="img-large reveal"
             data-animate="slide-left">

        <div>
            <h2 class="section-title reveal" data-animate="fade-up">
                Who We Are
            </h2>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
                Established in 2017, Crane Academy was founded with a clear purpose — to provide accessible, high-quality education rooted in Christian values and strong discipline.
            </p>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.10">
                We serve learners from Play Group to Junior Secondary under the Competency-Based Curriculum (CBC), focusing on building strong academic foundations while nurturing character, responsibility, and confidence.
            </p>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.14">
                Our commitment is to develop well-rounded learners who are academically capable, morally upright, and prepared to excel in the next stages of their education.
            </p>
        </div>
    </div>
</section>

{{-- ================= LEADERSHIP & GOVERNANCE ================= --}}
<section class="administration">
    <div class="container two-col">
        <div>
            <h2 class="section-title reveal" data-animate="fade-up">
                Leadership & Governance
            </h2>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
                Crane Academy is led by a dedicated management team focused on maintaining high academic standards, structured discipline, and continuous improvement.
            </p>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.10">
                Through clear policies, active supervision, and regular academic assessment, we ensure that teaching quality, learner progress, and student welfare remain our top priorities.
            </p>
        </div>

        <img src="/images/school/admin-block.jpg"
             alt="Crane Academy Leadership"
             loading="lazy"
             class="img-large reveal"
             data-animate="slide-left"
             data-delay="0.08">
    </div>
</section>

{{-- ================= MISSION, VISION & VALUES ================= --}}
<section class="mv">
    <div class="container two-col">
        <img src="/images/school/vission.jpg"
             alt="Mission Vision and Core Values"
             loading="lazy"
             class="img-large reveal"
             data-animate="slide-left">

        <div>
            <h2 class="section-title reveal" data-animate="fade-up">
                Mission, Vision & Core Values
            </h2>

            <ul class="mv-list reveal" data-animate="fade-up" data-delay="0.06">
                <li>
                    <strong>Mission:</strong>
                    To nurture the whole child — spiritually, intellectually, physically, and socially — and equip learners with the skills and values needed to succeed academically and in life.
                </li>

                <li>
                    <strong>Vision:</strong>
                    To be a leading centre of academic excellence and Christian character formation in the region.
                </li>

                <li>
                    <strong>Core Values:</strong>
                    Courage, Respect, Accountability, Nobility, and Excellence.
                </li>
            </ul>
        </div>
    </div>
</section>

{{-- ================= OUR LEARNING COMMUNITY ================= --}}
<section class="community">
    <div class="container two-col">
        <div>
            <h2 class="section-title reveal" data-animate="fade-up">
                Our Learning Community
            </h2>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">
                At Crane Academy, we believe education is a partnership between school, parents, and learners. We foster a supportive environment where respect, discipline, and hard work are valued.
            </p>

            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.10">
                Our learners benefit from structured guidance, continuous assessment, and personal attention that help track progress and ensure measurable academic growth.
            </p>
        </div>

        <img src="/images/school/staff.jpg"
             alt="Students and Teachers at Crane Academy"
             loading="lazy"
             class="img-large reveal"
             data-animate="slide-left"
             data-delay="0.08">
    </div>
</section>

@endsection
