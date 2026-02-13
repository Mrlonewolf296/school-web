@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-2 gap-6">
    <div class="bg-white p-6 shadow rounded">
        <h3 class="text-lg font-semibold">Total Staff</h3>
        <p class="text-3xl mt-2">{{ $staffCount }}</p>
    </div>

    <div class="bg-white p-6 shadow rounded">
        <h3 class="text-lg font-semibold">Unread Messages</h3>
        <p class="text-3xl mt-2">{{ $unreadMessages }}</p>
    </div>
</div>

@endsection
