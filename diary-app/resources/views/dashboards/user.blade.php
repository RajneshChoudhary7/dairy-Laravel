@extends('layouts.dashboard')

@section('title', 'Customer Dashboard')

@section('content')
<h2 class="mb-4 text-center">Welcome, {{ Auth::user()->name }}!</h2>

<div class="card shadow-sm p-4 mb-4">
    <h4 class="mb-3">Your Profile Details</h4>
    <div class="d-flex align-items-center">
        <div class="me-4">
            @if(Auth::user()->face_image)
                <img src="{{ asset('storage/' . Auth::user()->face_image) }}" 
                     alt="profile photo" width="100" height="100" 
                     class="rounded-circle border shadow-sm">
            @else
                <img src="{{ asset('images/default-user.png') }}" 
                     alt="default photo" width="100" height="100" 
                     class="rounded-circle border shadow-sm">
            @endif
        </div>
        <div>
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p><strong>Joined On:</strong> {{ Auth::user()->created_at->format('d M Y') }}</p>
        </div>
    </div>
</div>

<div class="card shadow-sm p-4">
    <h4 class="mb-3">Your Recent Orders</h4>
    @if(isset($orders) && count($orders) > 0)
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $index => $order)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>₹{{ number_format($order->price, 2) }}</td>
                <td>
                    <span class="badge bg-success">{{ ucfirst($order->status) }}</span>
                </td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-muted">You have not placed any orders yet.</p>
    @endif
</div>
@endsection
