@extends('layouts.admin')

@section('content')

<h1 class="text-2xl font-bold mb-6">Contact Messages</h1>

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr class="border-b {{ !$message->is_read ? 'bg-gray-100 font-semibold' : '' }}">
            <td class="p-3">{{ $message->name }}</td>
            <td class="p-3">{{ $message->email }}</td>
            <td class="p-3">
                {{ $message->is_read ? 'Read' : 'Unread' }}
            </td>
            <td class="p-3">{{ $message->created_at->format('d M Y') }}</td>
            <td class="p-3">
                <a href="{{ route('admin.inquiries.show', $message) }}" class="text-blue-600">
                    View
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $messages->links() }}
</div>

@endsection
