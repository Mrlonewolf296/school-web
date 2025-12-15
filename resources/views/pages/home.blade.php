@extends('layouts.public')

@section('title', 'Welcome to Private School')

@section('content')

<section class="bg-blue-50 min-h-screen flex flex-col justify-center items-center text-center p-6">
    <h1 class="text-5xl font-bold mb-4">Welcome to Private School</h1>
    <p class="text-lg mb-6">A nurturing environment for every child to thrive academically and socially.</p>

    <div class="flex gap-4">
        <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition">Contact Us</a>
        <a href="tel:+254700000000" class="bg-gray-200 px-6 py-3 rounded hover:bg-gray-300 transition">Call Us</a>
    </div>
</section>

<section class="py-12 px-6">
    <h2 class="text-3xl font-semibold text-center mb-8">Why Parents Choose Us</h2>
    <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Quality Education</h3>
            <p>Experienced teachers and a curriculum that balances academics and life skills.</p>
        </div>
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Safe Environment</h3>
            <p>Secure campus and attentive staff ensure students are safe and happy.</p>
        </div>
        <div class="p-6 bg-white rounded shadow hover:shadow-lg transition">
            <h3 class="font-bold text-xl mb-2">Holistic Growth</h3>
            <p>Sports, arts, and clubs foster creativity and teamwork alongside learning.</p>
        </div>
    </div>
</section>

<section class="bg-blue-50 py-12 px-6">
    <h2 class="text-3xl font-semibold text-center mb-8">Visit Us</h2>
    <p class="text-center mb-4">123 School Avenue, Your City, Country</p>
    <div class="flex justify-center">
        <iframe class="w-full md:w-2/3 h-64 rounded shadow" 
            src="https://www.google.com/maps/embed?pb=!1m18!..." 
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection
