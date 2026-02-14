@extends('layouts.admin')

@section('content')

<style>
    .dashboard-header { margin-bottom: 2rem; }
    .dashboard-header h1 { font-size: 2rem; font-weight: 700; color: #111827; margin: 0; }
    .dashboard-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; max-width: 72rem; }
    .stat-card { background: #fff; padding: 1.5rem; border-radius: 0.75rem; box-shadow: 0 6px 20px rgba(2,6,23,0.03); transition: all 200ms; }
    .stat-card:hover { box-shadow: 0 10px 30px rgba(2,6,23,0.06); transform: translateY(-2px); }
    .stat-card h3 { font-size: 1.125rem; font-weight: 700; margin: 0 0 1.5rem 0; color: #374151; }
    .stat-value { font-size: 3rem; font-weight: 700; color: #2563eb; margin: 0; }
    @media (min-width: 768px) { .dashboard-grid { grid-template-columns: repeat(2, 1fr); } }
</style>

<div class="dashboard-header">
    <h1>Dashboard</h1>
</div>

<div class="dashboard-grid">
    <div class="stat-card">
        <h3>Total Staff</h3>
        <p class="stat-value">{{ $staffCount }}</p>
    </div>

    <div class="stat-card">
        <h3>Unread Messages</h3>
        <p class="stat-value">{{ $unreadMessages }}</p>
    </div>
</div>

@endsection
