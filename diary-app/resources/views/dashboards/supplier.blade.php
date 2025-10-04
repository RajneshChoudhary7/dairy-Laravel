@extends('layouts.dashboard')

@section('title', 'Supplier Dashboard')

@section('content')
<h2 class="mb-4 text-center">Supplier Dashboard</h2>

<div class="card shadow-sm p-4 mb-4">
    <h4 class="mb-3">Supplier Profile</h4>
    <div class="d-flex align-items-center">
        <div class="me-4">
            @if(Auth::user()->face_image)
                <img src="{{ asset('storage/' . Auth::user()->face_image) }}" 
                     alt="Supplier Photo" width="100" height="100" 
                     class="rounded-circle border shadow-sm">
            @else
                <img src="{{ asset('images/default-supplier.png') }}" 
                     alt="Default Supplier" width="100" height="100" 
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
    <h4 class="mb-3">Products Supplied</h4>
    @if(isset($products) && count($products) > 0)
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price (₹)</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
    @foreach($products as $index => $product)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="product" width="60">
            @else
                N/A
            @endif
        </td>
        <td>{{ $product->name }}</td>
        <td>{{ ucfirst($product->category) }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ number_format($product->price, 2) }}</td>
        <td>{{ $product->created_at ? $product->created_at->format('d-m-Y') : 'N/A' }}</td>
    </tr>
    @endforeach
</tbody>
    </table>
    @else
        <p class="text-muted">No products supplied yet.</p>
    @endif
</div>
@endsection
