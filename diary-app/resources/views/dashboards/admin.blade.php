@extends('layouts.dashboard')

@section('title', 'Admin Dashboard')

@section('content')
<h2>Admin Dashboard</h2>

<table class="table table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $index => $user)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>
                @if($user->face_image)
                    <img src="{{ asset('storage/' . $user->face_image) }}" alt="photo" width="50">
                @else
                    N/A
                @endif
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ ucfirst($user->role) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
