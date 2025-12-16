@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-4">
            Contact {{ config('school.name') }}
        </h1>

        <p class="text-center text-gray-600 mb-10">
            We’d love to hear from you. Reach out for admissions, inquiries, or visits.
        </p>
          @if(session('success'))
           <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg transition transform duration-150 ease-out animate-pulse">
              {{ session('success') }}
            </div>
           @endif

        <div class="bg-white rounded-xl shadow-lg p-8">
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                @csrf
            @if($errors->any())
                   <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg">
                    <ul class="list-disc list-inside">
                     @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div>
                    <label class="block font-medium mb-1">Full Name</label>
                    <input type="text" name="name" required
                           class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-blue-200">
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block font-medium mb-1">Email Address</label>
                        <input type="email" name="email" required
                               class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-blue-200">
                    </div>

                    <div>
                        <label class="block font-medium mb-1">Phone Number</label>
                        <input type="text" name="phone"
                               class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-blue-200">
                    </div>
                </div>

                <div>
                    <label class="block font-medium mb-1">Message</label>
                    <textarea name="message" rows="5" required
                              class="w-full border rounded-lg px-4 py-3 focus:ring focus:ring-blue-200"></textarea>
                </div>

                <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
