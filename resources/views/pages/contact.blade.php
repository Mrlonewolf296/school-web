@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="container">
        <h1 class="page-title reveal" data-animate="fade-up">Contact {{ config('school.name') }}</h1>

        <p class="lead reveal" data-animate="fade-up" data-delay="0.06">We’d love to hear from you. Reach out for admissions, inquiries, or visits.</p>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card reveal" data-animate="scale-up">
            <form method="POST" action="{{ route('contact.store') }}" class="form">
                @csrf

                <div class="form-row">
                    <label class="form-label">Full Name</label>
                    <input type="text" name="name" required class="form-input">
                </div>

                <div class="form-grid">
                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" required class="form-input">
                    </div>

                    <div>
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-input">
                    </div>
                </div>

                <div class="form-row">
                    <label class="form-label">Message</label>
                    <textarea name="message" rows="5" required class="form-input"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-full">Send Message</button>
            </form>
        </div>
    </div>
</section>
@endsection
