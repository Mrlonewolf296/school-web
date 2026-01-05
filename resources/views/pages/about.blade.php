@extends('layouts.public')

@section('title', 'About Us | Crane Academy')

@section('content')

{{-- ================= PAGE INTRO ================= --}}
<section class="page-intro">
    <div class="container intro-inner">
        <h1 class="page-title reveal" data-animate="fade-up">About {{ config('school.name') }}</h1>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.08">Crane Academy is committed to providing quality education in a safe, disciplined, and nurturing environment.</p>
    </div>
</section>

{{-- ================= SCHOOL IDENTITY ================= --}}
<section class="identity">
    <div class="container two-col">
        <img src="/images/school/front.jpg" alt="Crane Academy Identity" loading="lazy" class="img-large reveal" data-animate="slide-left">

        <div>
            <h2 class="section-title reveal" data-animate="fade-up">Our Identity</h2>
            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">Crane Academy is a registered learning institution offering education from Play Group to Junior Secondary. The school operates under strong academic and moral principles, guided by a clear vision for learner success.</p>
        </div>
    </div>
</section>

{{-- ================= ADMINISTRATION ================= --}}
<section class="administration">
    <div class="container two-col">
        <div>
            <h2 class="section-title reveal" data-animate="fade-up">School Administration</h2>
            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">The administration block houses the school leadership and support staff who ensure smooth daily operations, policy implementation, and continuous improvement of academic standards.</p>
        </div>

        <img src="/images/school/admin-block.jpg" alt="Crane Academy Administration Block" loading="lazy" class="img-large reveal" data-animate="slide-left" data-delay="0.08">
    </div>
</section>

{{-- ================= MISSION, VISION & VALUES ================= --}}
<section class="mv">
    <div class="container two-col">
        <img src="/images/school/vission.jpg" alt="Mission Vision and Core Values" loading="lazy" class="img-large reveal" data-animate="slide-left">

        <div>
            <h2 class="section-title reveal" data-animate="fade-up">Mission, Vision & Core Values</h2>
            <ul class="mv-list reveal" data-animate="fade-up" data-delay="0.06">
                <li><strong>Mission:</strong> To develop total Human personality, physically, mentally, spiritually and equip with life-skills with a view to excel in both academic and life thereafter.</li>
                <li><strong>Vision:</strong> To be an excellent centre of learning and training in this region and beyond.</li>
                <li><strong>Core Values:</strong> Courage, Respect, Accountability, Nobility and Excellence.</li>
            </ul>
        </div>
    </div>
</section>

{{-- ================= SCHOOL COMMUNITY ================= --}}
<section class="community">
    <div class="container two-col">
        <div>
            <h2 class="section-title reveal" data-animate="fade-up">Our Learning Community</h2>
            <p class="text-muted reveal" data-animate="fade-up" data-delay="0.06">At Crane Academy, learners and teachers work together in a respectful and supportive environment that encourages curiosity, collaboration, and personal growth.</p>
        </div>

        <img src="/images/school/staff.jpg" alt="Students and Teacher" loading="lazy" class="img-large reveal" data-animate="slide-left" data-delay="0.08">
    </div>
</section>

@endsection
