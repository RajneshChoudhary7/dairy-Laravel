@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Tasks</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">+ Add Task</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Staff</th>
                <th>Task Name</th>
                <th>Status</th>
                <th>Date</th>
                <th>Due Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->staff->name }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ ucfirst($task->status) }}</td>
                    <td>{{ $task->formatted_date }}</td>
                    <td>{{ $task->formatted_due_time }}</td>

                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
