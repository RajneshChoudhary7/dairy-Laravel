@extends('layouts.dashboard')

@section('title', 'Staff Dashboard')

@section('content')
<h2 class="mb-4 text-center">Staff Dashboard</h2>

{{-- Staff Profile Section --}}
<div class="card shadow-sm p-4 mb-4">
    <h4 class="mb-3">Staff Profile</h4>
    <div class="d-flex align-items-center">
        <div class="me-4">
            @if(Auth::user()->face_image)
                <img src="{{ asset('storage/' . Auth::user()->face_image) }}" 
                     alt="Staff Photo" width="100" height="100" 
                     class="rounded-circle border shadow-sm">
            @else
                <img src="{{ asset('images/default-staff.png') }}" 
                     alt="Default Staff" width="100" height="100" 
                     class="rounded-circle border shadow-sm">
            @endif
        </div>
        <div>
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Role:</strong> {{ ucfirst(Auth::user()->role) }}</p>
            <p><strong>Joined On:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>

{{-- Assigned Tasks Section --}}
<div class="card shadow-sm p-4 mb-4">
    <h4 class="mb-3">Today's Assigned Tasks</h4>

    @if(isset($tasks) && count($tasks) > 0)
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $index => $task)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    @if($task->status == 'completed')
                        <span class="badge bg-success">Completed</span>
                    @elseif($task->status == 'in_progress')
                        <span class="badge bg-warning text-dark">In Progress</span>
                    @else
                        <span class="badge bg-secondary">Pending</span>
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($task->due_time)->format('h:i A') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-muted">No tasks assigned for today.</p>
    @endif
</div>

{{-- Optional Recent Activities Section --}}
<div class="card shadow-sm p-4">
    <h4 class="mb-3">Recent Activities</h4>
    <ul class="list-group">
        <li class="list-group-item">Checked product inventory (2 hrs ago)</li>
        <li class="list-group-item">Delivered 10L milk to Customer #A102</li>
        <li class="list-group-item">Updated butter stock details</li>
    </ul>
</div>
@endsection
