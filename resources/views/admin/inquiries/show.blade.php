@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-6">Message Details</h1>

<div class="bg-white p-6 shadow rounded space-y-4">
    <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Phone:</strong> {{ $contactMessage->phone }}</p>
    <p><strong>Message:</strong></p>
    <div class="border p-4 bg-gray-50">
        {{ $contactMessage->message }}
    </div>
</div>

@endsection
