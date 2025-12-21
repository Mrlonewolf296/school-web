@extends('layouts.public')

@section('title', 'About Us | Crane Academy')

@section('content')

{{-- ================= PAGE INTRO ================= --}}
<section class="bg-blue-50 py-24 text-center px-6">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            About {{ config('school.name') }}
        </h1>

        <p class="text-lg text-gray-700">
            Crane Academy is committed to providing quality education in a safe,
            disciplined, and nurturing environment.
        </p>
    </div>
</section>

{{-- ================= SCHOOL IDENTITY ================= --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <img
            src="/images/school/front.jpg"
            alt="Crane Academy Identity"
            class="rounded-lg shadow"
        >

        <div>
            <h2 class="text-3xl font-semibold mb-4">
                Our Identity
            </h2>

            <p class="text-gray-700 leading-relaxed">
                Crane Academy is a registered learning institution offering education
                from Play Group to Junior Secondary. The school operates under
                strong academic and moral principles, guided by a clear vision
                for learner success.
            </p>
        </div>
    </div>
</section>

{{-- ================= ADMINISTRATION ================= --}}
<section class="py-20 bg-gray-50 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-semibold mb-4">
                School Administration
            </h2>

            <p class="text-gray-700 leading-relaxed">
                The administration block houses the school leadership and support
                staff who ensure smooth daily operations, policy implementation,
                and continuous improvement of academic standards.
            </p>
        </div>

        <img
            src="/images/school/admin-block.jpg"
            alt="Crane Academy Administration Block"
            class="rounded-lg shadow"
        >
    </div>
</section>

{{-- ================= MISSION, VISION & VALUES ================= --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <img
            src="/images/school/vission.jpg"
            alt="Mission Vision and Core Values"
            class="rounded-lg shadow"
        >

        <div>
            <h2 class="text-3xl font-semibold mb-6">
                Mission, Vision & Core Values
            </h2>

            <ul class="space-y-4 text-gray-700">
                <li>
                    <strong>Mission:</strong> To develop total Human personality,physically, mentally, 
                    spiritually and equip with life-skills
                     with a view to excel in both academic and life thereafter.
                </li>
                <li>
                    <strong>Vision:</strong> To be an excellent centre of learning and training in this region and beyond.
                </li>
                <li>
                    <strong>Core Values:</strong> Courage, Respect, Accountability,
                    Nobility and Excellence.
                </li>
            </ul>
        </div>
    </div>
</section>

{{-- ================= SCHOOL COMMUNITY ================= --}}
<section class="py-20 bg-blue-50 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl font-semibold mb-4">
                Our Learning Community
            </h2>

            <p class="text-gray-700 leading-relaxed">
                At Crane Academy, learners and teachers work together in a
                respectful and supportive environment that encourages curiosity,
                collaboration, and personal growth.
            </p>
        </div>

        <img
            src="/images/school/staff.jpg"
            alt="Students and Teacher"
            class="rounded-lg shadow"
        >
    </div>
</section>

@endsection
