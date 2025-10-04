@extends('layouts.dashboard')

@section('title', 'Staff Dashboard')

@section('content')
<div class="container-fluid mt-4">
    <h2 class="mb-4">Staff Dashboard</h2>

    {{-- Welcome message --}}
    <div class="alert alert-info">
        Welcome, <strong>{{ auth()->user()->name }}</strong>! Here are your tasks for today.
    </div>

    {{-- Task summary --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Tasks</h5>
                    <p class="card-text">{{ $tasks->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pending</h5>
                    <p class="card-text">{{ $tasks->where('status', 'pending')->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Completed</h5>
                    <p class="card-text">{{ $tasks->where('status', 'completed')->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Tasks Table --}}
    <div class="card">
        <div class="card-header bg-dark text-white">
            Today's Tasks
        </div>
        <div class="card-body p-0">
            @if($tasks->isEmpty())
                <div class="p-3 text-center text-muted">
                    No tasks assigned for today.
                </div>
            @else
                <table class="table table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Task Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Due Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $index => $task)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $task->task_name }}</td>
                            <td>{{ $task->description ?? 'N/A' }}</td>
                            <td>
                                @if($task->status == 'pending')
                                    <span class="badge bg-warning text-dark">{{ ucfirst($task->status) }}</span>
                                @elseif($task->status == 'in_progress')
                                    <span class="badge bg-primary">{{ ucfirst(str_replace('_', ' ', $task->status)) }}</span>
                                @else
                                    <span class="badge bg-success">{{ ucfirst($task->status) }}</span>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
